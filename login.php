<?php

include_once 'conexao.php';
 

 if(empty($_POST['usuario']) || empty($_POST['senha'])){
    echo 'oi';
     header('Location:index.html');
     exit();
 }
//  echo 'oi';
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sqllog = "SELECT * FROM usuario WHERE nome='$usuario' and senha='$senha' limit 1";
$resultlog = mysqli_query($conexao, $sqllog);
$row = mysqli_num_rows($resultlog);
// echo $row; exit();
if($row == 1){
    header('location:principal.php');
    exit();
}else{
    header('location:index.html');
    exit();
}

?>