<?php

include_once('conexao.php');

$pesnome = $_POST['pesquisar'];
// echo $pesnome;
$sqlpesquisarcad = "select * from cadcliente where nome like '%$pesnome%' ";

$resultpesqcad = mysqli_query($conexao, $sqlpesquisarcad);
if($resultpesqcad){

    while($pesuisagera = mysqli_fetch_array($resultpesqcad)){
        if($pesuisagera == true){
        // echo "ID:" .$pesuisagera['id_clie']. "<br>";
            echo "Nome:" .$pesuisagera['nome']. "<br>";
            echo "E-mail:" .$pesuisagera['email']. "<br>";
            echo "fone:" .$pesuisagera['fone']. "<br>";
            echo "<a href=\"editexibpesq.php?id=$pesuisagera[id_clie]\">Editar</a></a>";
            echo '       /      ';
            echo "<a href=\"pesquisarcad.php?id=$pesuisagera[id_clie]\">Voltar para Pesquisa</a></a>";
            echo '<br>';
            echo '<br>';
        }
    }

    if($resultpesqcad->num_rows == 0){
        echo 'Cadastro não encontrado';
        echo '       /      ';
        echo "<a href=\"pesquisarcad.php\">Voltar para Pesquisa</a></a>";
        // header('Location:pesquisarcad.php');
    }

}else{
    echo 'Cadastro não encontrado';
}

?>