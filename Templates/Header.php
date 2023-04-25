<?php
include_once("./Config/url.php");
include_once("./Config/connection.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdoBook</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <!-- CSS -->

  <link rel="stylesheet" href="<?= $BASE_URL ?>Styles/styles.css">



</head>

<body>



  <script src="../script.js" defer>
  </script>
  <header>
    <nav>
      <div class="logo">
        <a href="<?= $BASE_URL ?>index.php"><img src="<?= $BASE_URL ?>img/Logo2.png" alt="Logo"></a>
      </div>
      <ul class="menu">
        <li><a class="menuBotao" href="<?= $BASE_URL ?>index.php">Home</a></li>
        <li><a class="menuBotao" href="<?= $BASE_URL ?>CadastrarLivros.php">Cadastrar Livros</a></li>
        <li><a class="menuBotao" href="<?= $BASE_URL ?>QuemSomos.php">Quem Somos</a></li>
        <li><a class="menuBotao" href="<?= $BASE_URL ?>Contatos.php">Contato</a></li>

      </ul>
    </nav>
  </header>
  <script>
    function validarnome(nome) {
      if (nome.value.length < 4) {
        alert("invalido")
        form.nome.focus()
      }
    }


    function validarDadosObrigatorios(form) {
      if (form.nome.value === "") {
        alert("preenvha o nome .");
        form.nome.focus();
      }
      return false;
    }



    function validarDadosObrigatorios(form) {
      if (form.nome.value === "") {
        alert("Informe o nome completo.");
        form.nome.focus();
      }
      return false;
    }

    function mascaraCelular(cel) {
      if (mascaraInteiro(cel) === false) {
        event.returnValue = false;
      }
      return formataCampo(cel, '(00) 00000-0000', event);
    }

    function validarEmail(email) {

      var filtro = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
      if (filtro.test(email.value)) {
        return true;
      } else {
        email.value = "";
        return alert("E-mail inválido");
        input.focus
      }

    }

    function formatarCelular(input) {
      // remove todos os caracteres que não são números do valor atual do input
      const valorAtual = input.value.replace(/\D/g, '');

      // define o formato esperado do número de celular: (##) #####-####
      const formatoEsperado = /(\d{2})(\d{5})(\d{4})/;

      // formata o valor atual do input de acordo com o formato esperado
      const valorFormatado = valorAtual.replace(formatoEsperado, '($1) $2-$3');

      // atualiza o valor do input com o número de celular formatado
      input.value = valorFormatado;
    }
  </script>