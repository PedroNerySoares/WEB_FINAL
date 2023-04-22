<?php
include_once("./Config/url.php");
include_once("./Config/connection.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Contatos</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>Styles/styles.css">

  
</head>

<body >
  <header>
    <nav>
      <div class="logo">
        <img src="<?= $BASE_URL ?>img/Logo2.png" alt="Logo">
      </div>
      <ul class="menu">
        <li><a href="<?= $BASE_URL ?>index.php">Home</a></li>
        <li><a href="<?= $BASE_URL ?>CadastrarLivros.php">Cadastrar Livros</a></li>
        <li><a href="<?= $BASE_URL ?>QuemSomos.php">Quem Somos</a></li>
        <li><a href="<?= $BASE_URL ?>Contatos.php">Contato</a></li>
        
      </ul>
    </nav>
  </header>
