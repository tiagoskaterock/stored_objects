<?php session_start() ?>

<?php include 'conecta.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Stored Objects - Total de Países</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
</head>
<body>


<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Stored Objetcs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="cidades.php">Cidades</a>
       </li>

       <li>
        <a class="nav-link" href="paises.php">Países</a>
      </li>
    </ul>
  </div>
</nav>

<br>

  <div class="mb-5">
    <a href="conta_cidades.php" class="btn btn-primary">
      Contar Cidades por País
    </a>

    <a href="conta_paises.php" class="btn btn-primary">
      Contar total de países
    </a>

    <a href="exclui_cidade.php" class="btn btn-primary">
      Exclui Última Cidade
    </a>

  </div>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] != null): ?>
  <div class="alert alert-warning">
    Registro excluído com sucesso
  </div>
<?php endif ?>

<?php 

  session_destroy();      

?>


