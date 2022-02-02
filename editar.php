<?php

include_once('conexao.php');

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sqledita = "SELECT * FROM cadcliente WHERE id_clie=$id";
    $resuledita = mysqli_query($conexao, $sqledita);
    // echo 'ID =' . $id;
    If($resuledita->num_rows > 0){
        while($editar = mysqli_fetch_assoc($resuledita)){
            $id = $editar['id_clie'];
            $nome = $editar['nome'];
            $email = $editar['email'];
            $fone = $editar['fone'];
        }
    }else{
         // header('Location:principal.php');
    }    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
</head>
<body>
    <form action="salvaedita.php" method="POST">
    <label>ID:</label>
    <input  name="id" type="text" value="<?php echo $id ?>">
    <br>
    <br>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome ?>">
    <br>
    <br>
    <label>E-mail:</label>
    <input type="email" name="email" value="<?php echo $email ?>">
    <br>
    <br>
    <label>Fone:</label>
    <input name="fone" type="text" value="<?php echo $fone ?>">
    <br>
    <br>
    <input type="submit" name="editacadcli" id="submit" value="Editar">
    <!-- <a href="principal.php">Sair</a> -->
    <input type="hidden" name="id" value="<?php echo $id ?>">
    </form>
</body>
</html>