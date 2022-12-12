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
       if(!empty($_GET['id'])){
        require_once("dataBase.php");

        $id = $_GET['id'];
        $sqlUpdate = "SELECT * FROM lista 
        WHERE id=$id";

        $result = $conexao->query($sqlUpdate);

        if($result->num_rows>0){
            while($sqlUpdate = mysqli_fetch_assoc($result)){
                $nome = $sqlUpdate['nome'];
                $email = $sqlUpdate['email'];
                $foto = $sqlUpdate['foto'];
            }

        }else{
            header("Location: index.php");
        }



       }else{
        header("Location: index.php");
    }

        
    ?>

<div id="dadosLista" >
    <form method="POST"   action="updatEdit.php" enctype="multipart/form-data">
        <div class="row g-3">
                <input type="hidden" name="id"  value="<?php echo $id  ?>">
            <div class="col-sm-4">
                <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="nome" value="<?php echo $nome  ?>">
            </div>
            <div class="col-sm-4">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email" value="<?php echo $email ?>">
            </div>
            <div class="col-sm-4">
                <input type="file" name="foto" class="form-control" value="<?php echo $foto ?>" >
            </div>
        </div>
        <div class="row g-3">
            
            <input type="submit" name="update" value="Atualizar" class="btn btn-primary" />
        </div>

    </form>
</div>
    
   
    
        <?php
    include "listaPessoas.php";

    
    //include "./template/footer.php";
    ?>
 
</body>
</html>