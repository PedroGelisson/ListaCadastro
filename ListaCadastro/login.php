<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./template/css/style.css">
</head>
<body>
    <form action="autenticar.php" method="POST">
        <div id="login">
            <h1>Entrar</h1>
            <input type="email" name="email" id="email" placeholder="  Email">
            <input type="password" name="senha" id="senha" placeholder="  Senha">
            <input id="enviar" type="submit" value="Entrar" name="submit" >
            <div id="cad">
                <a href="#cadastrarConta">Cadastrar-se</a>
                <a href="#refazerSenha">Esqueceu a senha?</a>
            </div>
           
            
        </div>
    </form>
    
</body>
</html>
