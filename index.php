<?php

include_once("./Templates/Header.php");


?>
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
    <!-- <div class="card">
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


<div class="card">
    <img class="card-img-top" src="https://books.google.com.br/books/publisher/content?id=GjgQCwAAQBAJ&hl=pt-BR&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U32CKE-XFfMvnbcz1qW0PS46Lg-Ew&w=1280" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Harry Potter - Pedra do Crack</h5>
        <p class="card-text">saosdnaosdnaosdnaosdnaoksndaksndaolksndalsndaksndlandlansdlad.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> -->







</section>

<?php
include_once("./Templates/Footer.php");
?>