<?php
include_once('./Templates/Header.php')
?>

<div class='containers'>
    <div class='form_campo'>
        <section id='contatos'>
            <h2>Contato</h2>
            <form action='<?= $BASE_URL ?>config/criarContato.php' method='POST' name='formulario' id='idform' onsubmit='return validarDadosObrigatorios(this)'>
                <fieldset id='fiel'>
                    <div class='row'>
                        <div class='form-group col-md-4'>
                            <label for='contato-nome'>Nome</label>
                            <input class='form-control' type='text' id='contato-nome' placeholder='Informe o nome' name='nome' id='nome' onblur ='validarTamNome()'>
                        </div>

                        <div class='form-group col-md-4'>
                            <label for='contato-sobrenome'>Sobrenome</label>
                            <input class='form-control' type='text' id='contato-sobrenome' placeholder='Informe o sobrenome' name='sobreNome' id='sobreNome'>
                        </div>
                    </div>


                    <div class='row'>
                        <div class='form-group col-md-6'>
                            <label for='contato-email'>Email</label>
                            <input class='form-control' type='email' id='contato-email' placeholder='Insira o email' name='email' id='email' onblur='validarEmail(this)'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='form-group col-md-6'>
                            <label for='numero-celular'>Celular</label>
                            <input type='tel' class='form-control' id='numero-celular' placeholder='(DD) XXXXX-XXXX' name='celular' id='celular' >


                        </div>
                    </div>

                    <div class='row'>
                        <div class='form-group col-md-9'>
                            <label for='obs'></label>
                            <textarea name='observacao' id='obs' cols='50' rows='5' placeholder='observação' name='observacao' id='observacao'></textarea>
                        </div>
                    </div>

                    <div class='form-group'>
                        <button type='submit' class='btn btn-primary btn-lg'>Enviar</button>
                        <button type='reset' class='btn btn-secundary btn-lg'>Limpar</button>
                    </div>
                </fieldset>

            </form>
        </section>


    </div>

</div>




<?php
include_once('./Templates/Footer.php')
?>