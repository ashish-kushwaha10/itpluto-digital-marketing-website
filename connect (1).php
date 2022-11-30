<?php

$host = 'localhost';
$user = 'adbighkc_ashish';
$pass = 'arjunkumar';
$db_name = 'adbighkc_mysqldb';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}