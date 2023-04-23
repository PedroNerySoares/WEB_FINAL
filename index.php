<?php

include_once("./Templates/Header.php");
include_once("./Config/BuscarLivros.php")
?>
<div class="container_pagina">

    <aside>
        <h2>Filtro</h2>
        <form id="filtro-form"  method="GET">
            <div class="mb-3">

                <?php include_once("Templates/select.html") ?>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="desconto" id="desconto" name="desconto">
                    <label class="form-check-label" for="desconto">
                        Mostrar somente itens com desconto
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Aplicar filtro</button>
            <button type="submit" class="btn btn-danger">Limpar Filtro</button>
            
        </form>
    </aside>

    <section id="livros-section">

        <?php foreach ($books as $book) : ?>

            <div class="card">
                <img class="card-img-top" src="<?= $book["IMAGEM"] ?> alt=" Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $book["Nome"]   ?></h5>
                    <p class="card-text"><?= $book["DESCRICAO"]  ?></p>
                    <p>Doador:<?= $book["DOADOR"]  ?></p>
                    <a href="#" class="btn btn-danger">Eu quero!</a>


                </div>


            </div>



        <?php endforeach; ?>


    </section>
</div>

<?php
include_once("./Templates/Footer.php");
?>