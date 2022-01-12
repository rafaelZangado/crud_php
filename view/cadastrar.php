<div class="canvas-wrapper">
    <h3>Cadastro de usuario</h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3 needs-validation" method="POST">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="" name="nome">
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Fone</label>
                    <input type="text" class="form-control" name="fone" id="" onkeypress="$(this).mask('(00) 0000-00009')">
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">C.P.F</label>
                    <input type="number" class="form-control" name="cpf" maxlength="9" id="" onkeypress="$(this).mask('(00) 0000-00009')">
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control" id="" name="email">
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Cep:
                        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" /></label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Rua:
                        <input class="form-control" name="rua" type="text" id="rua" size="60" /></label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Bairro:
                        <input class="form-control" name="bairro" type="text" id="bairro" size="40" /></label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Cidade:
                        <input class="form-control" name="cidade" type="text" id="cidade" size="40" /></label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Estado:
                        <input class="form-control" name="estado" type="text" id="uf" size="2" /></label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">complemento:
                        <input class="form-control" name="complemento" type="text" id="complemento" size="2" /></label>
                </div>
                

        </div>
    </div>
    <br>
    <div class="col-md-6">
        <button class="btn btn-primary" type="submit">SALVAR </button>
    </div>
    </form>
    <hr>
</div>
</div>
</div>

<script src="js/cep.js"></script>