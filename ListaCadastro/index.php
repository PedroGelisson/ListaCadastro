<?php
session_start();

if((!isset($_SESSION['email'])== true ) and (!isset($_SESSION['senha'])== true )){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: login.php");
}
$userLogado = $_SESSION['email'];
include "./template/header.php";
include "./template/nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./template/css/style.css">
</head>
<body>
    <?php
    include "listaPessoas.php";
    include "./template/footer.php";
    ?>
</body>
</html>