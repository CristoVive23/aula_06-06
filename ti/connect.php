<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_DB', 'session');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');

try {
    $connect = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB , MYSQL_USER, MYSQL_PASS);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}