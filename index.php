<?php

include_once("./Templates/Header.php");


?>



<section>
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

<?php
include_once("./Templates/Footer.php");
?>