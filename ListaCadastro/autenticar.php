<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once("dataBase.php");

    $email = $_POST['email'];
    $senha =md5($_POST['senha']);

    $sql = "SELECT * FROM usuario
    WHERE email='$email' AND senha='$senha'";

    $resultado=$conexao->query($sql);

    if(mysqli_num_rows($resultado)<1){
        header("Location: login.php");
        $msg['msg']="Falhao!";
        $msg['class']="danger";
        $_SESSION['msgs'][]=$msg; 
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
       
        $user=$resultado->fetch_array();
        
        $_SESSION['user']=$user;
        
        $msg['msg']="Sucesso!";
        $msg['class']="success";
        $_SESSION['msgs'][]=$msg;

        header("Location: index.php");
    }
}else{
    header("Location: login.php");
}