<?php
include_once'conexao.php';

$sql="SELECT * FROM cadcliente";
$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Pagina Principal</title>
</head>
<body>
    <h1>Pagina principal</h1>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <table class="table">
          <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Senha</th>
            <th scope="col">Fone</th>
            </tr>
                <div class="btncad">
                  <button class="btn btn-primary btnpesqcadcliea1"><a href="cadastroclie.php" class="text-light">Cadastrar Produto</a></button>
                  <button class="btn btn-primary btnpesqcadcliea2"><a href="pesquisarcad.php" class="text-light">Pesquisar Cadastro de Cliente</a></button>
                  <button class="btn btn-primary"><a href="index.html" class="text-light">Sair</a></button>
                </div>
            <br>
            </thead>
          <br>
          <!-- atenção deixar linha  essa é outra função -->
        <tbody>
            <?php
                while($cad = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $cad['id_clie'] . "</td>";
                    echo "<td>" . $cad['nome'] . "</td>";
                    echo "<td>" . $cad['email'] . "</td>";
                    echo "<td>" . $cad['fone'] . "</td>";
                    echo "<td>
                    <a href=\"editar.php?id=$cad[id_clie]\">Editar</a> /
                    <a href=\"excluir.php?id=$cad[id_clie]\"
                       onclick=\"return confirm('Você REALMENTE quer EXCLUIR esse cadastro !!!')\" >Excluir</a>
                    </td>";
                    echo "</tr>";
                 } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>