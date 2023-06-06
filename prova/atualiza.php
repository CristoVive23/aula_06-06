<?php 
include "config/conn.php";

$id = 3;
$title = "passaros";
$description = "passaros voam";

$stmt = $conect->prepare("UPDATE post SET :id = $id , :title= $title, :description = $description");




?>