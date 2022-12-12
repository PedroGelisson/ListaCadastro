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
<div id="dadosLista" >
    <form method="POST"  enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col-sm-4">
                <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="nome">
            </div>
            <div class="col-sm-4">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email">
            </div>
            <div class="col-sm-4">
                <input type="file" name="foto" class="form-control" >
            </div>
        </div>
        <div class="row g-3">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
        </div>

    </form>
</div>
    
   
    <?php
        if(isset($_POST['enviar'])){
            $arquivo="./imagens/".$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)){
                
                require_once "dataBase.php";    
                #executar consulta no BD
                $sql="INSERT INTO lista (nome, email, foto)
                VALUES 
                ('{$_POST['nome']}','{$_POST['email']}','{$arquivo}')";

                //echo $sql;

                if(!$conexao->query($sql)){
                    //var_dump($sql);
                    echo "Falha ao salvar registro!";
                }

            }
        }

        include "listaPessoas.php";
        include "./template/footer.php";
    ?>
    
</body>
</html>