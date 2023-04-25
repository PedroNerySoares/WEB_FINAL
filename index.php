<?php

include_once("./Templates/Header.php");
include_once("./Config/BuscarLivros.php");


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

            <input type="submit" href="<?= $BASE_URL ?>filtro.php" value="Aplicar Filtro" class="mb-3 btn  btn btn-primary">
            <br>
            <a href="<?= $BASE_URL ?>index.php" class="mb-3 btn btn-danger"> Limpar </a>
        </form>
    </aside>

    <section id="livros-section">


        <?php if (count($books) > 0) : ?>
            <?php foreach ($books as $book) : ?>

                <div class="card">
                    <img class="card-img-top">

                    <img class=" card-img-top" src="<?= $book["IMAGEM"] ?> 
                     alt=" Card image cap" onerror="this.onerror=null;this.src='./img/LivroDefault.jpg';">

                    <div class="card-body">
                        <h5 class="card-title"><?= $book["Nome"]   ?></h5>

                        <b>
                            <p>Doador:
                        </b><?= $book["DOADOR"]  ?></p>
                        <b>
                            <p>Postado:
                        </b><?= date('d/m/Y', strtotime($book["DATA_CRIACAO"])) ?></p>

                        <a href="<?= $BASE_URL ?>livroDetalhe.php?id=<?= $book["ID"] ?>" class="btn btn-danger">Eu quero!</a>


                    </div>


                </div>



            <?php endforeach; ?>
        <?php elseif (empty($_GET)) : ?>
            <p id="empty-list-text">Ainda não há livros cadastrados, <a href="<?= $BASE_URL ?>CadastrarLivros.php">Cadastrar Livros</a>.</p>
        <?php else : ?>
            <p id="empty-list-text">Não Foi localizado nenhum livro com este filtro.<a href="<?= $BASE_URL ?>index.php">Voltar para Home</a></p>
        <?php endif; ?>


    </section>
</div>

<?php
include_once("./Templates/Footer.php");
?>