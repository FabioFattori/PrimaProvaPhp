<?php 
    include './Class/DB.php';
    header('Access-Control-Allow-Origin: *');
    
    $nome=$_GET['nome'];
    if($nome!==null&&$nome!==""&&$nome!==" "){
        echo json_encode(PDOCommands::get_rows('SELECT * FROM `studente` WHERE studente.Nome=?', $nome));
    }else{
        echo "sparisciPorcoDIo"
    }
    die();
?>