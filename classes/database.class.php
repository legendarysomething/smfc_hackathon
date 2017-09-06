<?php
	class DatabaseConnection {
		const SELECT = 0;
		const INSERT = 1;
		const UPDATE = 2;
		const DELETE = 3;
		const DEFAULT_MAX_RETRIES = 3;

		const MASTER_DB = 'master';
		const THE_LINK = 'the_link';
		const LOGGING_MASTER = 'logging_master';
		const LOGGING_SLAVE = 'logging_slave';

		private static $CONNECTIONS = array();

		/**
         * Constructor (using this to instantiate the object will result in pinging alone when testing the connection)
         * @param 	mysqli 		$conn			mysqli connection object
         * @param 	integer 	$max_retries	maximum number of reconnect attempts when disconnected
         */
		public function __construct(mysqli $conn, $max_retries=self::DEFAULT_MAX_RETRIES) {
			$this->max_retries = $max_retries;
			$this->recreate_connection = false;
			$this->set_conn($conn);
			// re-group as array to use array_search when determining query type
			$this->query_types = array(
				self::SELECT=>'SELECT',
				self::INSERT=>'INSERT',
				self::UPDATE=>'UPDATE',
				self::DELETE=>'DELETE',
			);
			// for identification purposes
			$this->_created_at = microtime(true);
		}
		/**
         * Instantiation of the object that creates a mysqli connection object using the credentials provided (using this to create the function will result in recreation of the connection object when pinging fails)
         * @param 	mysqli 		$conn			mysqli connection object
         * @param 	integer 	$max_retries	maximum number of reconnect attempts when disconnected
         */
		public static function create_connection($host, $user, $password, $database, $max_retries=self::DEFAULT_MAX_RETRIES) {
			// create new instance
			$instance = new DatabaseConnection(new mysqli($host, $user, $password, $database), $max_retries);
			// save and store the creds (may need to implement encryption of password in the future)
			$instance->creds = array('host'=>$host, 'user'=>$user, 'password'=>$password, 'database'=>$database);
			// create flag to mark recreation of connection object
			$instance->recreate_connection = true;
			// return instantiated object
			return $instance;
		}
		/**
         * Creates an array of references from the provided array (necessary for mysqli->bind_param).
         * @param  	array 	$arr	array of values to create array of references from
         * @return  array	$refs 	array of references
         */
		private function make_refs(array $arr) {
			$refs = array();
			foreach($arr as $key=>$value)
				$refs[$key] = &$arr[$key];
			return $refs;
		}
		/**
         * Derive the query type based on the first word in the query statement.
         * @param  	string 		$stmt	query statement
         * @return  integer				type of query, denoted as one of the constants
         */
		private function derive_query_type($stmt) {
			// assume query statement checks out (rely on prepared statement checking)
			$exploded = explode(' ', $stmt);
			$first_term = strtoupper($exploded[0]);
			return array_search($first_term, $this->query_types);
		}
		/**
         * Finds the position of the n-th occurrence of the needle in the haystack.
         * @param  	string 		$search		needle/search term
         * @param  	string 		$string 	haystack/string to search
         * @param  	integer 	$offset 	value of n
         * @return  mixed					false if no results were found, index position of start of the n-th occurrence otherwise
         */
		private function nthStrPos($search, $string, $offset) {
			/*** explode the string ***/
			$arr = explode($search, $string);
			/*** check the search is not out of bounds ***/
			switch($offset) {
		        case $offset == 0:
    				return false;
    			case $offset > max(array_keys($arr)):
    				return false;
    			default:
    				return strlen(implode($search, array_slice($arr, 0, $offset)));
			}
		}
		/**
         * Helps modify the statement and params to support IN clauses.
         * @param 	string 		$stmt 		query statement
         * @param 	array 		$params 	array of params (refer query function usage examples below) if any, null otherwise
         * @param 	array 		 			assoc array with keys 'stmt' and 'params' with the preprocessed statement and params
         */
		private function preprocess($stmt, array $params=null) {
			// check for params; return immediately if no params
			if($params == null) {
				return array('stmt'=>$stmt, 'params'=>$params);
			}
			// preprocess statement and params
			$rebuilt_params = array('');
			// maintain counter of param sizes to cope with cases of multiple IN clauses that create additional question marks
			$param_counter = 1;
			// check params for arrays; skip sub 0 for params type definition
			for($i = 1; $i < count($params); $i++) {
				// check if param is array (signifies IN params)
				if(is_array($params[$i])) {
					// modify number of params in statement
					$stmt = substr_replace($stmt, implode(',', array_fill(0, count($params[$i]), '?')), $this->nthStrPos('?', $stmt, $param_counter), 1);
					// rebuild param types
					$rebuilt_params[0] .= str_repeat($params[0][$i - 1], count($params[$i]));
					// rebuild list of params
					$rebuilt_params = array_merge($rebuilt_params, $params[$i]);
					// increment param counter by number of params for IN clause
					$param_counter += count($params[$i]);
				} else {
					// rebuild param types
					$rebuilt_params[0] .= $params[0][$i - 1];
					// rebuild list of params
					$rebuilt_params[] = $params[$i];
					// increment param counter by 1
					$param_counter++;
				}
			}
			return array('stmt'=>$stmt, 'params'=>$rebuilt_params);
		}
		/**
         * Default formatting function for packaging the data returned from SELECT statements.
         * @param  	mysqli_stmt 	$pstmt 			mysqli prepared statement
         * @param  	integer 		$query_type 	type of query, denoted as one of the constants
         * @return  mixed							an array (containing 0 or more records) for SELECT statements, the insert_id for INSERT statements, true for UPDATE and DELETE statements, throws an exception otherwise
         */
		private function format(mysqli_stmt $pstmt, $query_type) {
			// check query type to determine return value
			switch($query_type) {
				case self::SELECT:
					$results = array();
					// create structure to bind to results
					$meta = $pstmt->result_metadata();
					$meta_names = array();
					while($field = $meta->fetch_field()) {
						$meta_names[] = $field->name;
					}
					// do once more separately for assoc array's keys
					$meta = $pstmt->result_metadata();
					$keys = array();
					while($field = $meta->fetch_field()) {
						$keys[] = $field->name;
					}
					// dynamically bind params
					$vars = $meta_names;
					// use reflection to dynamically bind results
					$ref = new ReflectionClass('mysqli_stmt');
					$method = $ref->getMethod('bind_result');
					$method->invokeArgs($pstmt, $vars);
					// iterate and retrieve results
					while($pstmt->fetch()) {
						$row = array(); // create new array to store record
						for($i = 0; $i < count($meta_names); $i++) {
							$row[$keys[$i]] = $vars[$i]; // insert key-value pair into array
						}
						array_push($results, $row); // append record into results
					}
					return $results;
				case self::INSERT:
					return $this->conn->insert_id;
				case self::UPDATE:
				case self::DELETE:
					return $this->conn->affected_rows;
				default:
					throw new Exception('Unrecognised query type.');
			}
		}
		/**
         * Query function that executes the query using a prepared statement and processes the results that are returned.
         * @param  	string 		$stmt 					query statement to execute
         * @param  	array 		$params 				array of params (refer query function usage examples below) if any, null otherwise
         * @param  	callable 	$callback 				function that accepts a mysqli_stmt object to process the results that are returned
         * @param  	boolean 	$preprocess 			indicates whether or to preprocess the data to support IN clauses; provide false to skip preprocessing and improve performance
         * @param  	boolean		$derive_query_type		indicates whether to let the object derive the query type on its own; provide false AND the query type to skip the derivation step and improve performance
         * @param  	integer 	$query_type 			type of query, denoted as one of the constants; provide this only if $derive_query_type is set to false, or it will be ignored
         * @return  mixed								the return value of $this->format or $callback (if provided)
         */
		public function query($stmt, array $params=null, $preprocess=true, $callback=null, $callback_args=array(), $derive_query_type=true, $query_type=null) {
			// test connection before query
			if(!$this->test_conn()) {
				throw new Exception('Connection died. Exceeded max number of retries.');
			}
			// preprocessing for IN clauses
			if($preprocess) {
				$preprocessed = $this->preprocess($stmt, $params);
				// reassign to stmt and params
				$stmt = $preprocessed['stmt'];
				$params = $preprocessed['params'];
			}
			// initialise statement
			$pstmt = $this->conn->stmt_init();
			// check the statement (prepared statements can identify issues like invalid table names and permissions)
			if($pstmt->prepare($stmt)) {
				// use reflection to dynamically bind params
				if(!is_null($params)) {
					$ref = new ReflectionClass('mysqli_stmt');
					$method = $ref->getMethod('bind_param');
					if(!$method->invokeArgs($pstmt, $this->make_refs($params))) {
						throw new Exception("Wrong parameter count for mysqli_stmt::bind_param()"); // mysqli doesn't throw an error for this
					}
				}
				// execute statement and buffer results
				if($pstmt->execute()) {
					// pass to format to package returned data according to query type
					$results = $callback == null ? $this->format($pstmt, $derive_query_type ? $this->derive_query_type($stmt) : $query_type) : $callback($pstmt, array_merge(array('conn'=>$this), $callback_args));
					$pstmt->close();
					return $results;
				} else {
					throw new Exception($this->conn->error);
				}
			} else {
				throw new Exception($this->conn->error);
			}
		}
		/**
         * Validates the connection and then sets it as an instance attribute.
         * @param 	mysqli		$conn		mysqli connection object
         */
		public function set_conn(mysqli $conn) {
			// check that connection is not null
			if($conn == null) {
				throw new Exception('Connection argument cannot be NULL.');
			}
			$this->conn = $conn;
			// check that the connection works
			if(!$this->test_conn()) {
				throw new Exception('The database connection could not be established.');
			}
		}
		/**
         * Pings the connection a maximum of N times, where N = max_retries. If the recreate_connection flag is set to true, the connection is recreated after every failed ping.
         * @return 	boolean				boolean value denoting whether the connection is working or not
         */
		public function test_conn() {
			for($i = 0; $i < $this->max_retries; $i++) {
				if($this->conn->ping()) {
					return true;
				}
				if($this->recreate_connection) {
					$this->conn->close();
					$this->set_conn(new mysqli($this->creds['host'], $this->creds['user'], $this->creds['password'], $this->creds['database']));
				}
			}
			return false;
		}
		/**
         * Proxy method for returning the error from the $this->conn mysqli connection object.
         * @return 	mysqli				error from the mysqli connection object
         */
		public function error() {
			return $this->conn->error;
		}
		

		/***************************************************************************************************************************************
			QUERY EXAMPLES
			1.	SELECT statement without WHERE clauses (no params)
				$results = $db_conn->query(
					"SELECT * FROM table;"	// stmt
				);
			2.	SELECT statement with built-in WHERE clauses (no params)
				$results = $db_conn->query(
					"SELECT * FROM table WHERE attr = 0;" // stmt
				);
			3.	SELECT statement with WHERE clauses and dynamic params
				$results = $db_conn->query(
					"SELECT * FROM table WHERE attr1 = ? AND attr2 = ?;", // stmt
					array('is', 0, 'some value') // params
				);
				Refer to the type specification chars under mysqli_stmt->bind_param
				(http://php.net/manual/en/mysqli-stmt.bind-param.php)
			4.	SELECT statement with IN clauses (dynamic number of params in the IN clause supported as well)
				$results = $db_conn->query(
					"SELECT * FROM table WHERE attr1 = ? AND attr2 IN (?);", // stmt
					array('is', 0, array('string1', 'string2', 'string3')) // params
				);
			5.	INSERT statement with built-in values (no params)
				$insert_id = $db_conn->query(
					"INSERT INTO table (attr1, attr2) VALUES (0, 'some value');" // stmt
				);
			6.	INSERT statement with dynamic params
				$insert_id = $db_conn->query(
					"INSERT INTO table (attr1, attr2) VALUES (?, ?);", // stmt
					array('is', 0, 'some value');
				);

			ADDITIONAL NOTES ON PARAMS
			1.	The first element of params must always be a string denoting the data types of the params in corresponding order.
			2.	For IN clauses, use only 1 placeholder (ie. '?') in the brackets and the corresponding element in the params array must
				be supplied as an array as well (refer example 4).

		***************************************************************************************************************************************/
	}
?>