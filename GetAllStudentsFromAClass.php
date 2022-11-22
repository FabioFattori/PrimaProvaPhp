<?php

include './Class/DB.php';
header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: POST'); header('Access-Control-Allow-Headers: Content-Type') ;
    
    $ID=$_GET['ID_Classe'];
    if($ID!==null&&$ID!==""&&$ID!==" "){
        echo json_encode(PDOCommands::get_rows('SELECT * FROM `studente` WHERE ID_Classe = ?',$ID));
    }else{
        echo "sparisciPorcoDIo";
    }
    die();

?>