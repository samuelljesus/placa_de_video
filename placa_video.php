<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $nome=$_POST['nome_da_placa_de_video'];
  $geracao=$_POST['geração_da_placa_de_video'];
  $descricao=$_POST['descrição_da_placa_de_video'];

  # informar o banco de dados antes da tabela seguido de .
  $sql="insert into placa_video.placa_de_video (nome,geracao,descricao)
  values('$nome','$geracao','$descricao')";
  $result=mysqli_query($con,$sql);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Placa de Vídeo!</title>
  </head>
  <body>
<div class="container my-5">
  <form method="post">
    <div class="form-group">
    <label>PLACA DE VÍDEO</label>
    <input type="text" class="form-control" 
     placeholder="Insira o nome da placa de vídeo"
     name="nome_da_placa_de_video">
    </div>
    <div class="form-group">
    <label>GERAÇÃO DA PLACA DE VÍDEO</label>
    <input type="text" class="form-control"
     placeholder="Insira a Geração da placa de vídeo"
     name="geração_da_placa_de_video">
    </div>
    <div class="form-group">
    <label>DESCRIÇÃO DA PLACA DE VÍDEO</label>
    <input type="text" class="form-control"
     placeholder="Insira a descrição da placa de vídeo"
     name="descrição_da_placa_de_video"> 
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
</form>
</div>   
  </body>
</html>