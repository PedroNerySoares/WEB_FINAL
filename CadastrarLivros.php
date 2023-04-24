<?php
include_once('./Templates/Header.php')
?>


<div class='containers'>

    <h1 id='main-title'>Doe seu Livro </h1>
    <div id='card'>
        <img id='card-img' src='placeholder.jpg' style='display: none;'>
    </div>
    <form id='create-form' action='<?= $BASE_URL ?>config/criarLivro.php' method='POST' class='form_campo' name='formulario' id='idform' onsubmit='return validarDadosObrigatorios(this)'>
        <fieldset id="set">
            <input type='hidden' name='type' value='create'>
            <div class='form-group col-md-6'>
                <label for='name'>Nome do Livro:</label>
                <input type='text' class='form-control' id='nomeLivro' name='nomeLivro' placeholder='Digite o nome do livro' required>
            </div>

            <div class='form-group col-md-3'>
                <?php include_once('Templates/selectgenero.html') ?>
            </div>
            <div class='form-group col-md-3'>
                <?php include_once('Templates/selectCondicao.html') ?>
            </div>


            <div class='form-group col-md-6'>
                <label for='phone'>URL da Foto:</label>
                <input type='text' class='form-control' id='urlImage' name='urlImage'>

            </div>

            <div class='form-group col-md-6'>
                <label for='observations'>Observações:</label>
                <textarea type='text' class='form-control' id='observations' name='observacao' placeholder='Insira as observações' rows='3'></textarea>
            </div>
            <div class=' col-md-6 row'>
                <div class='form-group col-md-6'>
                    <label for='nome'>Nome</label>
                    <input type='text' class='form-control' id='nomeDoador' name='nomeDoador' placeholder='Digite o primeiro nome' required oninput='validarTamNome(this)'>
                </div>
                <div class='form-group col-md-6'>
                    <label for='nome'>Sobrenome:</label>
                    <input type='text' class='form-control' id='sobreNomeDoador' name='sobreNomeDoador' placeholder='Digite o Sobrenome' required >
                </div>

            </div>
            <div class='form-group col-md-6'>
                <label for='phone'>Telefone do contato:</label>
                <input type='text' class='form-control' id='celular' name='celular' placeholder='Digite o telefone' required oninput="mascaraCelular(this)">
            </div>


            <button type='submit' class='btn btn-primary'>Cadastrar</button>


        </fieldset>



    </form>
</div>


<?php
include_once('./Templates/Footer.php')
?>

