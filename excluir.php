<?php

include_once('conexao.php');

if(!empty($_GET['id'])){

    $id = $_GET['id'];
    $sqlexcluir = "select * from cadcliente where id_clie='$id' ";
    $sqlexclucad = mysqli_query($conexao, $sqlexcluir);
    if($sqlexclucad){
        $sqldeleta = "delete from cadcliente where id_clie='$id' ";
        $resultdelet = mysqli_query($conexao, $sqldeleta);
        header('Location:principal.php');
    }else{
        header('Location:principal.php');
    }
    header('Location:principal.php');
}

?>