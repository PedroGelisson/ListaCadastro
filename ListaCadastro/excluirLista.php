<?php
session_start();

if(!empty($_GET['id'])){
    include_once('dataBase.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM lista 
    WHERE id= $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows >0){
        $sqlDelete = "DELETE FROM lista 
        WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header("Location: index.php");