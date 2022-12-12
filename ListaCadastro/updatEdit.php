<?php
session_start();
include_once("dataBase.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$arquivo="./imagens/".$_FILES["foto"]["name"];
if(move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)){
        
    #executar consulta no BD
    $sql = "UPDATE  lista SET nome = '$nome', email = '$email', foto= '$arquivo'
    WHERE id=$id";

    if(!$conexao->query($sql)){
        //var_dump($sql);
        echo "Falha ao atualizar registro!";
    }

}


$sql = "UPDATE lista SET nome = '$nome',email = '$email'
WHERE id = '$id'";

$result = $conexao->query($sql);

if(mysqli_affected_rows($conexao)){
    header("Location: index.php");
    echo "sucesso";
}else{
    header("Location: index.php");
    echo "Falha";
}