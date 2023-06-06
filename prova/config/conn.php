<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "atividade";

try {
 $connect = new PDO("mysql:host=". $host . ";dbname=". $database,$user,$pass);
 echo "ok";
} catch (Exeption $e) {
  $e->getMessage(); 
}




?>