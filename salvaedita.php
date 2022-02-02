<?php

include_once('conexao.php');

if(isset($_POST['editacadcli'])){
echo 'ok';

$id_edita = $_POST["id"];
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];

echo $id_edita;
echo '<br>';
echo $nome;
echo '<br>';
echo $email;
echo '<br>';
echo $fone;
echo '<br>';

$sqlsalvaedita = "UPDATE cadcliente SET
                    nome='$nome',
                    email='$email',
                    fone='$fone'
                    WHERE id_clie='$id_edita' ";

$resulsalvaedita = mysqli_query($conexao, $sqlsalvaedita);

if($resulsalvaedita == true){
    echo "Editado com sucesso";
}else{
    echo "Erro em editar";
}
header('Location:principal.php');

}

?>