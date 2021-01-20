<?php

$dsn = "mysql:host=localhost;dbname=testdb";
$un = 'root';
$pw = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
try {
    $connection = new PDO($dsn, $un, $pw, $options);
    //echo 'connected';
}
catch (Exception $e) {
    //echo $e->getMessage();
}