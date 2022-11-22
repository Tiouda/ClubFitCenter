<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $host_name = 'localhost';
    $database = 'fitcenter';
    $user_name = 'root';
    $password = '';
} else {
    $host_name = 'HOST';
    $database = 'DB_NAME';
    $user_name = 'USER';
    $password = 'PASSWORD';
}

$pdo = new PDO('mysql:host=' . $host_name . ';dbname=' . $database . ';charset=utf8', $user_name, $password);
?>
