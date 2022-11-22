<?php
include './Class/DB.php';
header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET'); header('Access-Control-Allow-Headers: Content-Type') ;

echo json_encode(PDOCommands::get_rows('SELECT * FROM `classe`'));
die();

?>