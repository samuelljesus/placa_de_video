<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Placa de Vídeo!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  </head>
  <body>
  <div class = "container">
    <button class="btn btn-primary m-5" ><a href="placa_video.php"
    class="text-light"> Adicionar </a></button> 
    <table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Geração</th>
      <th scope="col">Descrição</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from placa_de_video";
  $result=mysqli_query($con,$sql);
  if ($result){
    while($row=mysqli_fetch_assoc($result)){
      $ID=$row['ID'];
      $nome=$row['nome'];
      $geracao=$row['geracao'];
      $descricao=$row['descricao'];
      echo ' <tr>
      <td>'.$ID.'</td>
      <td>'.$nome.'</td>
      <td>'.$geracao.'</td>
      <td>'.$descricao.'</td>
      <td>
      <button class="btn btn-primary"><a href="alterar.php? alterarid='.$ID.'"class="text-light">Alterar </a></button>
      <button class="btn btn-danger"><a href="deletar.php? deletaid='.$ID.'"class="text-light">Deletar </a></button>
      </td>
    </tr>';
    }
  }

  ?>
  </tbody>
</table>
</div>
</body>
</html>