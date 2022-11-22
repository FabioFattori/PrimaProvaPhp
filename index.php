<?php
include './Class/DB.php';
header('Access-Control-Allow-Origin: *');

$nome=$_GET['nome'];
echo json_encode(PDOCommands::get_rows('SELECT * FROM `studente` WHERE studente.Nome=?', $nome));
die();


?>