<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./template/css/style.css">
</head>
<body>
<header>
    <div id="titulo">
        <h1>Cadastro de Pessoas</h1>
    </div>
    <div id="loga">
        <?php
        echo $userLogado;
        ?>
        <a id="logout" href="logout.php">Logout</a>
    </div>
</header>
</body>
</html>

