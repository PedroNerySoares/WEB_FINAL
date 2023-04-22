<?php

include_once("./Templates/Header.php");
?>
<div class="container_pagina">

    <aside>
        <h2>Filtro</h2>
        <form id="filtro-form">
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria:</label>
                <select class="form-select" id="categoria" name="categoria">
                    <option value="">Todas as categorias</option>
                    <option value="livros">Livros</option>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="roupas">Roupas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <select class="form-select" id="marca" name="marca">
                    <option value="">Todas as marcas</option>
                    <option value="marca1">Marca 1</option>
                    <option value="marca2">Marca 2</option>
                    <option value="marca3">Marca 3</option>
                </select>
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
            
        </form>
    </aside>

    <section id="livros-section">

        <!-- <?php foreach ($books as $book) : ?>

        <div class="card">
            <img class="card-img-top" src="<?= $book["IMAGEM"] ?> alt=" Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $book["Nome"]   ?></h5>
                <p class="card-text"><?= $book["DESCRICAO"]  ?></p>
                <p>Doador:<?= $book["DOADOR"]  ?></p>
                <a href="#" class="btn btn-danger">Eu quero!</a>


            </div>


        </div>



    <?php endforeach; ?> -->



        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
                <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>







    </section>
</div>

<?php
include_once("./Templates/Footer.php");
?>