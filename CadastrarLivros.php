<?php
include_once("./Templates/Header.php")
?>


<div class="container_cadastro">
    <!-- <?php include_once("templates/backbtn.html"); ?> -->
    <h1 id="main-title">Doe seu Livro</h1>

    <div id="imagem-container">
    </div>
    <form id="create-form" action="<?= $BASE_URL ?>config/criarLivro.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group col-md-4">
            <label for="name">Nome do Livro:</label>
            <input type="text" class="form-control" id="nomeLivro" name="nomeLivro" placeholder="Digite o nome do livro" required>
        </div>

        <div class=" col-md-6 row">
            <div class="form-group col-md-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nomeDoador" name="nomeDoador" placeholder="Digite o primeiro nome" required>
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobreNomeDoador" name="sobreNomeDoador" placeholder="Digite o Sobrenome" required>
            </div>

        </div>
        <div class="form-group col-md-4">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o telefone" required>
        </div>

        <div class="form-group col-md-4">
            <label for="phone">URL da Foto:</label>
            <input type="text" class="form-control" id="urlImage" name="urlImage" onchange="atualizarImagem()">

        </div>



        <div class="form-group col-md-4">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observacao" placeholder="Insira as observações" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>


<?php
include_once("./Templates/Footer.php")
?>