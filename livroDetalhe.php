<?php

include_once('./Templates/Header.php');
include_once('./Config/BuscaLivroDetalhe.php');


$api_what = 'https://api.whatsapp.com/send?phone=5521' . $book['CELULAR'] . '&text=';
$string =   'Olá ' . $book['DOADOR'] . ', ví seu anúncio do Livro ' . $book['Nome'] . ' no *AdoBook*.'
    . 'Ainda esta disponível? ';

?>
<section id='doador' class='form_campo'>
    <h2>Doador</h2>
    <form>
        <fieldset name='formulario' id='idform' onsubmit='return validarDadosObrigatorios(this)'>
            <div id='campo_imagem'>
                <img src='<?= $book['IMAGEM'] ?>' alt='Capa do livro <?= $book['Nome'] ?>' class='left' id='eu' onerror='this.onerror=null;this.src="./img/LivroDefault.jpg";'>
            </div>


            <div class='row'>
                <div class='row'>
                    <div class='form-group col-md-12'>
                        <label for='livro-nome'>Nome do Livro</label>
                        <input class='form-control' type='text' id='livro-nome' value='<?= $book['Nome'] ?>' disabled>
                    </div>
                </div>

                



                <div class='form-group col-md-5'>
                    <label for='genero'>Gênero</label>
                    <select name='genero' id='genero' disabled>
                        <option value='sdas'><?= $book['GENERO'] ?></option>
                    </select>
                </div>


                <div class='form-group col-md-6'>
                    <label for='condicoes'>Condição</label>
                    <select name='condicoes' id='condicoes' disabled>
                        <option value='><?= $book['CONDICAO'] ?></option>
                    </select>
                </div>

                <div class='row'>
                    <div class='form-group col-md-9'>
                        <label for='obs'></label>
                        <textarea name='observacao' id='obs' cols='50' rows='5' disabled><?= $book['DESCRICAO'] ?></textarea>
                    </div>
                </div>

            </div>




            <div class='row'>
                <div class='form-group col-md-6'>
                    <label for='contato-nome'>Nome</label>
                    <input class='form-control' type='text' id='contato-nome' placeholder='Informe o nome' require oninput='validarnome(this)'>
                </div>

                <div class='form-group col-md-6'>
                    <label for='contato-sobrenome'>Sobrenome</label>
                    <input class='form-control' type='text' id='contato-sobrenome' placeholder='Informe o sobrenome' require >
                </div>
            </div>


            <div class='row'>
                <div class='form-group col-md-6'>
                    <label for='contato-email'>Email</label>
                    <input class='form-control' type='email' id='contato-email' placeholder='Insira o email' require oninput='validarEmail(this)'>
                </div>
            </div>

            <a href='<?= $api_what . $string ?>' class='btn btn-primary' target='_blank'>Entrar em Contato</a>


        </fieldset>
    </form>
</section>

<?php
include_once('./Templates/Footer.php');
?>