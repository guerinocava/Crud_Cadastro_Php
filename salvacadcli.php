<?php

include_once('conexao.php');

    if(isset($_POST['cadcli'])){
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $fone = $_POST["fone"];

        $sqlcadcli = "INSERT INTO  cadcliente (nome, email, fone) VALUES ('$nome', '$email', '$fone')";

        $resusul = mysqli_query($conexao, $sqlcadcli);

        if($resusul == true){
            echo 'Cadastrado com sucesso';
        }else{

            echo 'Erro em cadastrado' . mysqli_connect_error($conexao);
        }
        mysqli_close($conexao);
    }else{
        echo "Erro na conexao";
    }

header('Location:principal.php');
?>