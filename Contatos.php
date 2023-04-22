<?php
include_once("./Templates/Header.php")
?>

<section id="contatos">
    <h2>Contato</h2>
    <form>
        <fieldset>
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
                    <input class="form-control" type="email" id="contato-email" placeholder="Insira o email">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="numero-celular">Celular</label>
                    <input type="text" class="form-control" id="numero-celular" placeholder="Insira o numero do celular">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-9">
                    <label for="obs"></label>
                    <textarea name="observacao" id="obs" cols="50" rows="5" placeholder="observação"></textarea>
                </div>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                <button type="reset" class="btn btn-secundary btn-lg">Limpar</button>
            </div>
        </fieldset>

    </form>
</section>

<?php
include_once("./Templates/Footer.php")
?>