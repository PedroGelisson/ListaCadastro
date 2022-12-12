<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro';


$conexao= new mysqLi($host,$usuario,$senha,$banco);

if (mysqli_connect_errno())
    {
        echo "Falha: ".mysqli_connect_error();
    }