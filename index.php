<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--MENU -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PAINEL DE CONTROLE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" id="cadastrar" href="#">+Cadastrar cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="listar" href="#">Listar cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <li class="d-flex">
                    <button class="btn btn-outline-success" type="submit">foto</button>
                </li>
            </div>
        </div>
    </nav>
    </div>
    <!--FIM MENU-->
    <br>
    <script>
        $(document).ready(function() {
            $("#cadastrar").on('click', function() {
                $.ajax({
                    url: 'view/cadastrar.php', // envia para pagina
                    beforeSend: function() {
                        $('#print').html(' <div class="d-flex justify-content-center">Carregando...<div class="spinner-border" role="status"> <span class="visually-hidden"> Loading...</span></div></div>');
                    },

                    success: function(data) {
                        $('#print').html(data);
                    },

                    error: function(data) {
                        $('#print').html('ERRO AO ENCONTRAR PAGINA...');                    },

                });
            }); // quando eu clicar no botao com o id='pagar'
            $("#listar").on('click', function() {
                $.ajax({
                    url: 'view/listar.php', // envia para pagina
                    beforeSend: function() {
                        $('#print').html(' <div class="d-flex justify-content-center">Carregando...<div class="spinner-border" role="status"> <span class="visually-hidden"> Loading...</span></div></div>');
                    },

                    success: function(data) {
                        $('#print').html(data);
                    },

                    error: function(data) {
                        $('#print').html('ERRO AO ENCONTRAR PAGINA...');                    },

                });
            }); // quando eu clicar no botao com o id='pagar'
        }); // quando eu clicar no botao com o id='pagar'F
    </script>
    <div class="container">
        <div id='print'> 
            <div class="col-18">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Bem vindo estranho !</h4>
                    <p>
                        Apresento um sistema bem simples para realizar as quatro operações do CRUD... criar, editar, deletar e salvar.
                        esse templade esta sendo feito em <b>html </b>, <b>bootstrap</b>, <b>javascript</b> e <b>ajax</b>
                    </p>
                    <hr>
                    <p class="mb-0">nesse sistema vamos trabalhar com arrays para fazer o cadastramento dos dados.</p>
                </div>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>