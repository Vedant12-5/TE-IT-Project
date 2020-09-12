<?php
//Connection to Database
$db['db_localhost'] = 'localhost';
$db['db_username'] = 'root';
$db['db_password'] = '';
$db['db_dbname'] = 'vast';

foreach($db as $key => $value) {
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_DBNAME);
if($connection) {
    // echo 'we are connected';
}
?>