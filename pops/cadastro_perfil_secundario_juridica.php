<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'Soda Drink - Cadastro do perfil jurídico secundário</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/cadastro_perfil_secundario_juridica.css">
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
        <!-- header -->
        <header><?php require_once('header.php') ?></header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Cadastro do perfil jurídico secundário</h1>
        </div>

        <!-- caixa central que ocupa 1200 -->
        <div class="caixa_central_pjs centralizar_caixa">
            <form name="frmCadPjs" method="POST" enctype="multipart/form-data" action="cadastro_perfil_secundario_juridica.php">
                <div class="caixa_central_form_pjs centralizar_caixa">
                    <!-- Linha 1 -->
                    <div class="caixa_inputs_pjs">
                        <!-- Responsável pelo contato -->
                        <div class="inputs_form inputs_form_grande">
                            <label class="label_estilo" for="txtRespContatoPjs">Responsável pelo Contato:</label>
                            <input class="input_estilo" type="text" name="txtRespContatoPjs" id="txtRespContatoPjs">
                        </div>
                        <!-- Email: -->
                        <div class="inputs_form inputs_form_grande">
                            <label class="label_estilo" for="txtEmailPjs">Email:</label>
                            <input class="input_estilo" type="text" name="txtEmailPjs" id="txtEmailPjs">
                        </div>
                        <!-- Telefone -->
                        <div class="inputs_form inputs_form_medio">
                            <label class="label_estilo" for="txtTelefonePjs">Telefone:</label>
                            <input class="input_estilo" type="text" name="txtTelefonePjs" id="txtTelefonePjs">
                        </div>
                    </div>

                    <!-- LINHA 2 -->
                    <div class="caixa_inputs_pjs">
                        <!-- Logradouro -->
                        <div class="inputs_form inputs_form_medio_2">
                                <label class="label_estilo" for="txtLogPjs">Logradouro:</label>
                                <input class="input_estilo" type="text" name="txtLogPjs" id="txtLogPjs">
                            </div>
                            <!-- Nº -->
                            <div class="inputs_form inputs_form_minima">
                                <label class="label_estilo" for="txtNumPjs">Nº:</label>
                                <input class="input_estilo" type="text" name="txtNumPjs" id="txtNumPjs">
                            </div>
                            <!-- Bairro -->
                            <div class="inputs_form inputs_form_medio_2">
                                <label class="label_estilo" for="txtBairroPjs">Bairro:</label>
                                <input class="input_estilo" type="text" name="txtBairroPjs" id="txtBairroPjs">
                            </div>
                            <!-- CEP -->
                            <div class="inputs_form inputs_form_medio_2">
                                <label class="label_estilo" for="txtCepPjs">CEP:</label>
                                <input class="input_estilo" type="text" name="txtCepPjs" id="txtCepPjs">
                            </div>
                            <!-- Cidade -->
                            <div class="inputs_form inputs_form_medio_2">
                                <label class="label_estilo" for="txtCidadePjs">Cidade:</label>
                                <input class="input_estilo" type="text" name="txtCidadePjs" id="txtCidadePjs">
                            </div>
                            <!-- Cidade -->
                            <div class="inputs_form inputs_form_medio_2">
                                <label class="label_estilo">Estado:</label><br>
                                <select class="input_estilo2" type="text" name="txtEstadoPjs" id="txtEstadoPjs">
                                    <option value="ola">SP</option>
                                </select>
                            </div>
                        </div>

                        <!-- LINHA 3 -->
                        <div class="form_linha_3 centralizar_caixa">
                            <div class="caixa_img">
                                <img src="imagens/a.jpg" width="200" height="180" title="ola" alt="ola"><br>
                                <input type="file" name="flFotoPjs">
                            </div>
                            <!-- Usuário -->
                            <div class="inputs_form inputs_form_grande">
                                <label class="label_estilo" for="txtUserPjs">Usuário:</label>
                                <input class="input_estilo" type="text" name="txtUserPjs" id="txtUserPjs">
                            </div>
                            <!-- Senha -->
                            <div class="inputs_form inputs_form_grande">
                                <label class="label_estilo" for="txtSenhaPjs">Senha:</label>
                                <input class="input_estilo" type="text" name="txtSenhaPjs" id="txtSenhaPjs">
                            </div>
                        </div>

                        <div class="caixa_inputs_pjs centralizar_caixa">
                            <div class="caixa_botao_pjs centralizar_caixa">
                                <input class="botao_pjs" type="button" value="Cadastrar" name="btnCadPjs">
                            </div>
                        </div>
                    </div>   
                </div>
            </form>
        <footer> <?php require_once('footer.html');?>  </footer>

    </body>
</html>