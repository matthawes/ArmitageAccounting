<?php 
//create database connection info in an array
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_db'] = "armitage_tables";
$db['db_port'] = "8889";

//for each key convert to uppercase and create a constant
foreach($db as $key => $value){
define(strtoupper($key), $value);
}

//connect to a database
$connect = mysqli_connect(
DB_HOST,
DB_USER,
DB_PASS,
DB_DB,
DB_PORT
);

$query = "SET NAMES utf8";

//if does not connect display error
if (!$connect){
die('Not connected : ' . mysqli_error($connect));
}
?>
