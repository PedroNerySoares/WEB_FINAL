<?php

include_once("./Templates/Header.php");
include_once("./Config/BuscaLivroDetalhe.php");
// include_once("./Config/BuscarLivros.php");
// // include_once("./Config/emai.php")

// $api_what = "https://api.whatsapp.com/send?phone=5521970351912&text=";
// $string = "Olá, ví seu anúncio do Livro (XXXXXXXXXXX) no AdoBook. Ainda esta disponível? ";
// echo ($api_what . str_replace(" ", "%20", $string));

?>
<section id="doador" class="form_campo">
    <h2>Doador</h2>
    <form>
        <fieldset>
            <div id="campo_imagem">
                <img src="<?= $book["IMAGEM"] ?>" alt="vilela" class="left" id="eu">
            </div>


            <div class="row">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="livro-nome">Nome do Livro</label>
                        <input class="form-control" type="text" id="livro-nome" value="<?= $book["Nome"] ?>" disabled>
                    </div>
                </div>


                <div class="form-group col-md-10">
                    <label for="cadastro">Gênero</label>
                    <select name="cadastro" id="cadastro" disabled>
                        <option value="sdas"><?= $book["GENERO"] ?></option>
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" disabled>
                        <option value="">BOM</option>
                    </select>
                </div>

                <div class="row">
                    <div class="form-group col-md-9">
                        <label for="obs"></label>
                        <textarea name="observacao" id="obs" cols="50" rows="5"  disabled><?= $book["DESCRICAO"] ?></textarea>
                    </div>
                </div>

            </div>




            <div class="row">
                <div class="form-group col-md-6">
                    <label for="contato-nome">Nome</label>
                    <input class="form-control" type="text" id="contato-nome" placeholder="Informe o nome">
                </div>

                <div class="form-group col-md-6">
                    <label for="contato-sobrenome">Sobrenome</label>
                    <input class="form-control" type="text" id="contato-sobrenome" placeholder="Informe o sobrenome">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="contato-email">Email</label>
                    <input class="form-control" type="email" id="contato-email" placeholder="Insira o email" onblur="validarEmail(this)">
                </div>
            </div>


            <button type="button" class="btn btn-primary btn-lg">Entrar em Contato</button>

        </fieldset>
    </form>
</section>

<?php
include_once("./Templates/Footer.php");
?>