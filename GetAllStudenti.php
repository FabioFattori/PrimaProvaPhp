<?php
include './Class/DB.php';
header('Access-Control-Allow-Origin: *');

echo json_encode(PDOCommands::get_rows('SELECT * FROM `studente`'));
die();

?>