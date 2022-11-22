<?php
include './Class/DB.php';
header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: POST'); header('Access-Control-Allow-Headers: Content-Type') ;
    $Sezione=$_GET['Sezione'];
    $Materia=$_GET['Mat'];

        echo PDOCommands::create_row('INSERT INTO `classe` (NomeClasse,Materia) VALUES (?,?)',$Sezione,$Materia);
    
    die();
?>