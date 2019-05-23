<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Fale Conosco</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/fale_conosco.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CHAMANDO O JQUERY -->
        <script src="js/jquery.js">
        </script>
        <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
        <script src="js/event.js">
        </script>
    </head>

    <body>
        <?php
            session_start();
            require_once('../cms/model/DAO/Conexao.php');
            $conex = new Conexao();
            $con = $conex->connectDatabase();

        ?>
        <!-- header -->
        <header>
          <?php require_once('header.php') ?>
        </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Fale Conosco</h1>
        </div>
        <!-- caixa central do fomulario -->
        <div class="caixa_central_fl">
            <div class="caixa_form_fl bordas-form">
                <form action="fale_conosco.php" name="frmFaleConosco" id="frmFaleConosco" method="POST">
                    <!-- Nome: -->
                    <div class="campos-form bordas-form">
                        <input class="bordas-form bordas-sombra" type="text" id="txtNome" name="txtNome" placeholder="Nome completo">
                    </div>

                    <!-- E-mail: -->
                    <div class="campos-form bordas-form">
                        <input class="bordas-form" type="email" id="txtEmail" name="txtEmail" placeholder="Email">
                    </div>

                    <!-- Telefone e Celular -->
                    <div class="campos-form bordas-form">
                        <div class="caixa_contato">
                            <input class="bordas-form bordas-sombra" type="text" id="txtTelefone" name="txtTelefone" placeholder="Telefone">
                        </div>
                        <div class="caixa_contato margin-direita-contato">
                            <input class="bordas-form bordas-sombra" type="text" id="txtCelular" name="txtCelular" placeholder="Celular">
                        </div>
                    </div>

                    <!-- Tipo de Contato-->
                    <div class="campos-form bordas-form">
                        <select class="slt-form bordas-form bordas-sombra" id="sltContato" name="sltContato">
                            <option disabled selected>Selecione:</option>
                            <option>Crítica</option>
                            <option>Informação</option>
                            <option>Dúvida</option>
                        </select>
                    </div>

                    <!-- TextArea -->
                    <div class="campos-form bordas-form">
                        <label for="txtObservacao" class="font-texto label">Observação:</label><br>
                        <textarea class="observacao bordas-form bordas-sombra" id="txtObservacao" name="txtObservacao"></textarea>
                    </div>

                    <!-- Botão Enviar -->
                    <div class="caixa_botao">
                        <input type="button" id="btnEnviar" name="btnEnviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        <!-- footer -->
       <footer> <?php require_once('footer.html')?> </footer>
    </body>
</html>
