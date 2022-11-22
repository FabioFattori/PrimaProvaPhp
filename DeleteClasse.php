<?php

include './Class/DB.php';
header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: POST'); header('Access-Control-Allow-Headers: Content-Type') ;
    
    $ID=$_GET['ID'];
    if($ID!==null&&$ID!==""&&$ID!==" "){
        echo PDOCommands::delete_row('DELETE FROM `classe` WHERE id = ?',$ID);
    }else{
        echo "sparisciPorcoDIo";
    }
    die();

?>