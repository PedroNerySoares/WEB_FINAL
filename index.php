<?php
include_once("./Templates/Header.php");

$qtde = count($books);
echo ("quantidade de livro:$qtde");

?>

<?php foreach ($books as $book) : ?>
    <div class="card">
        <img class="card-img-top" src="<?=$book["IMAGEM"]?> alt="Card image cap">

        <div class="card-body">
            <h5 class="card-title"><?=$book["Nome"]   ?></h5>
            <p class="card-text">Livro em otimo estado, guardao fora de umidade e sol, lindo somente uma vez </p>
            <p>Doador: Pedro Nery</p>
            <a href="#" class="btn btn-danger">Eu quero!</a>
        </div>

    </div>



<?php endforeach; ?>

<!-- 



<div class="card">
    <img class="card-img-top" src="<?= $BASE_URL ?>img/LBDV.jpg" alt="Card image cap">
                                    
    <div class="card-body">
        <h5 class="card-title">Lado Bom da Vida</h5>
        <p class="card-text">Qualidade mediana </p>
        <p>Doador: Dath Vader</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
</div> -->

<?php
include_once("./Templates/Footer.php");
?>