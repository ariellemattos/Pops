<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'S - Cadastro e Edição Pessoa Jurídica</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/cadastro_edicao_pessoa_juridica.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CHAMANDO O JQUERY -->
        <script src="js/jquery.js">
        <script src="js/effects.js"></script>
        </script>
        <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
        <script src="js/event.js">
        </script>
    </head>

    <body>
        <header>
          <?php require_once('header.php'); ?>
        </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Cadastro de pessoa juridica</h1>
        </div>

        <!-- Caixa central do formulário que ocupa 1200 da tela -->
        <div class="caixa_central_formulario">
            <form name="frmCadPjs" method="POST" enctype="multipart/form-data" action="cadastro_perfil_secundario_juridica.php">
                <!-- caixa que guarda todo o formulário -->
                <div class="caixa_form_juridica">
                    <!-- LINHA 1-->
                    <div class="caixa_input">
                        <!-- CNPJ -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtCnpjPj" class="label_estilo">CNPJ:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtCnpjPj" id="txtCnpjPj">
                        </div>
                        <!-- Razão Social -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <label for="txtRazaoSocialPj" class="label_estilo">Razão Social:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtRazaoSocialPj" id="txtRazaoSocialPj">
                        </div>

                        <!-- Nome Fantasia-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <label for="txtNomeFantasiaPj" class="label_estilo">Nome fantasia:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtNomeFantasiaPj" id="txtNomeFantasiaPj">
                        </div>
                    </div>

                    <!-- LINHA 2-->
                    <div class="caixa_input">
                        <!-- Logradouro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtLogradouroPj" class="label_estilo">Logradouro:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtLogradouroPj" id="txtLogradouroPj">
                        </div>
                        <!-- num -->
                        <div class="caixa_inputs_form caixa_inputs_form_minima">
                            <label for="txtNumPj" class="label_estilo">Nº:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtNumPj" id="txtNumPj">
                        </div>
                        <!-- Bairro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtBairroPj" class="label_estilo">Bairro:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtBairroPj" id="txtBairroPj">
                        </div>
                        <!-- CEP-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtCepPj" class="label_estilo">CEP:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtCepPj" id="txtCepPj">
                        </div>
                        <!-- Cidade -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtCidadePj" class="label_estilo">Cidade:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtCidadePj" id="txtCidadePj">
                        </div>
                        <!-- Estado -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label class="label_estilo">Estado:</label><br>
                            <select class="input_estilo inputs_form" name="txtEstadoPj" id="txtEstadoPj">
                                <option value="1">
                                    SP
                                </option>
                            </select>
                        </div>
                    </div>

                    <!-- LINHA 3-->
                    <div class="caixa_input">
                        <!-- Responsavel pelo Contato -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <label for="txtRespContatoPj" class="label_estilo">Responsável pelo contato:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtRespContatoPj" id="txtRespContatoPj">
                        </div>

                        <!-- Email-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <label for="txtEmailPj" class="label_estilo">Email:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtEmailPj" id="txtEmailPj">
                        </div>

                        <!-- Telefone -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtTelefonePj" class="label_estilo">Telefone:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtTelefonePj" id="txtTelefonePj">
                        </div>
                    </div>

                    <!-- Linha 4 -->
                    <!-- LINHA 3-->
                    <div class="caixa_imagem">
                        <div class="imagem_pj">
                            <label class="label_estilo">Foto:</label><br>
                            <img src="imagens/a.jpg" width="150" height="150" alt="ola" title="ola"><br>
                            <input type="file" name="txtFotoPj" id="txtFotoPj">
                        </div>
                        <!-- Usuário -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtUserPj" class="label_estilo">User:</label><br>
                            <input class="input_estilo inputs_form" type="text" name="txtUserPj" id="txtUserPj">
                        </div>

                        <!-- Senha -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <label for="txtSenhaPj" class="label_estilo">Senha:</label><br>
                            <input class="input_estilo inputs_form" type="password" name="txtSenhaPj" id="txtSenhaPj">
                        </div>
                    </div>

                    <!-- LINHA 4 BOTÃO -->
                    <div class="caixa_botao_pj">
                        <input class="botao_pj" type="button" value="Cadastrar" name="btnCadPj" id="btnCadPj">
                    </div>

                </div>
            </form>
        </div>
        <footer>  <?php require_once('footer.html')?> </footer>
    </body>
</html>
