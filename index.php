<?php 

$page_header = 'Home';
include_once('header.php');

include_once('classes/database.class.php');
$thelink = DatabaseConnection::create_connection("localhost", "root", "", "hackathon");

$name = 21;
$query = $thelink->query(
        "SELECT * FROM test WHERE name = ?;",
          array('s', $name)
        );


var_dump($query)


?>
