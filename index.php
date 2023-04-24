<?php

include_once("./Templates/Header.php");
include_once("./Config/BuscarLivros.php");
// include_once("./Config/emai.php")

// $api_what = "https://api.whatsapp.com/send?phone=5521970351912&text=";
// $string = "Olá, ví seu anúncio do Livro (XXXXXXXXXXX) no AdoBook. Ainda esta disponível? ";
// echo ($api_what . str_replace(" ", "%20", $string));



?>
<div class="container_pagina">

    <aside>
        <h2>Filtro</h2>
        <form id="filtro-form" method="GET">
            <div class="mb-3">

                <?php include_once("Templates/selectGenero.html") ?>
            </div>
            <div class="mb-3">

                <?php include_once("Templates/selectCondicao.html") ?>
            </div>
<!-- 
            <button type="submit" class="mb-3 btn btn-primary">Aplicar filtro</button>
            <button type="submit" class="mb-3 btn btn-danger">Limpar Filtro</button> -->
            <input type="submit" href="<?= $BASE_URL ?>filtro.php" value="Aplicar Filtro" class="mb-3 btn  btn btn-primary">
            <!-- <a >Limpar Filtro</a> -->
            <br>
            <a href="<?= $BASE_URL ?>index.php ?>" class="mb-3 btn btn-danger" > Limpar </a>
        </form>
    </aside>

    <section id="livros-section">

        <?php foreach ($books as $book) : ?>
            
            <div class="card">
                <!-- <img class="card-img-top" src="<?= $book["IMAGEM"] ?> alt=" Card image cap"> -->
                <img class="card-img-top" "> 
                
                <img class=" card-img-top" src="<?= $book["IMAGEM"] ?> 
                     alt=" Card image cap" onerror="this.onerror=null;this.src='./img/LivroDefault.jpg';">

                <div class="card-body">
                    <h5 class="card-title"><?= $book["Nome"]   ?></h5>
                    <!-- <p class="card-text"><?= $book["DESCRICAO"]  ?></p> -->
                    <b><p>Doador:</b><?= $book["DOADOR"]  ?></p>
                    <b><p>Postado:</b><?= $book["DATA_CRIACAO"]  ?></p>
                    
                    <a href="<?= $BASE_URL ?>livroDetalhe.php?id=<?= $book["ID"] ?>" class="btn btn-danger">Eu quero!</a>


                </div>


            </div>



        <?php endforeach; ?>


    </section>
</div>

<?php
include_once("./Templates/Footer.php");
?>