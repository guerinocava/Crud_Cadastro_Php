<?php
include_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div class="container">
   <form action="salvacadcli.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <br>
    <label>E-mail:</label>
    <input type="email" name="email" id="email">
    <br>
    <br>
    <label>Fone:</label>
    <input type="text" name="fone" id="fone">
    <br>
    <br>
    <input type="submit" name="cadcli" id="submit" value="Cadastrar">
    <a href="principal.php">Sair</a>
   </form>
   </div>
</body>
</html>