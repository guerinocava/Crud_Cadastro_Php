<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha = '';
$bco = 'testecadastro';

$conexao = mysqli_connect($host, $usuario, $senha, $bco) or die('Naõ foi possível conectar');

if(mysqli_connect_error()){
    echo 'Falha na conexão' . mysqli_connect_error() or die('Falha de conexão');
}

?>