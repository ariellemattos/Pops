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
            <h1>Cadastro - pessoa juridica</h1>
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
                            <input class="input_estilo inputs_form" type="text" placeholder="CNPJ" name="txtCnpjPj" id="txtCnpjPj">
                        </div>
                        <!-- Razão Social -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Razão Social"name="txtRazaoSocialPj" id="txtRazaoSocialPj">
                        </div>

                        <!-- Nome Fantasia-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Nome fantasia" name="txtNomeFantasiaPj" id="txtNomeFantasiaPj">
                        </div>
                    </div>

                    <!-- LINHA 2-->
                    <div class="caixa_input">
                        <!-- Logradouro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Logradouro" name="txtLogradouroPj" id="txtLogradouroPj">
                        </div>
                        <!-- num -->
                        <div class="caixa_inputs_form caixa_inputs_form_minima">
                            <input class="input_estilo inputs_form" type="text" placeholder="Nº" name="txtNumPj" id="txtNumPj">
                        </div>
                        <!-- Bairro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Bairro" name="txtBairroPj" id="txtBairroPj">
                        </div>
                        <!-- CEP-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="CEP" name="txtCepPj" id="txtCepPj">
                        </div>
                        <!-- Cidade -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Cidade" name="txtCidadePj" id="txtCidadePj">
                        </div>
                        <!-- Estado -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <div class="caixa_input largura_fixa_div_3 selectForm">
                                <select class="slt_estado formatacao_inputs borda_inputs largura_fixa_inputs_3 slt_estado" id="sltEstado" name="sltEstado">
                                    <option disabled selected name="slcEstado">Estado:</option>
                                    <option value="Acre">AC</option>
                                    <option value="Alagoas">AL</option>
                                    <option value="Amapá">AP</option>
                                    <option value="Amazonas">AM</option>
                                    <option value="Bahia">BA</option>
                                    <option value="Ceará">CE</option>
                                    <option value="Distrito Federal">DF</option>
                                    <option value="Espito Santo">ES</option>
                                    <option value="Goias">GO</option>
                                    <option value="Maranhao">MA</option>
                                    <option value="Mato Grosso">MT</option>
                                    <option value="Mato Grosso do Sul">MS</option>
                                    <option value="Minas Gerais">MG</option>
                                    <option value="Para">PA</option>
                                    <option value="Paraiba">PB</option>
                                    <option value="Parana">PR</option>
                                    <option value="Pernambuco">PE</option>
                                    <option value="Piaui">PI</option>
                                    <option value="Rio de Janeiro">RJ</option>
                                    <option value="Rio Grande do Norte">RN</option>
                                    <option value="Rio Grande do Sul">RS</option>
                                    <option value="Rondonia">RO</option>
                                    <option value="Roraima">RR</option>
                                    <option value="Santa Catarina">SC</option>
                                    <option value="Sao Paulo">SP</option>
                                    <option value="Sergipe">SE</option>
                                    <option value="Tocantins">TO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- LINHA 3-->
                    <div class="caixa_input">
                        <!-- Responsavel pelo Contato -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Responsável pelo contato" name="txtRespContatoPj" id="txtRespContatoPj">
                        </div>

                        <!-- Email-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Email" name="txtEmailPj" id="txtEmailPj">
                        </div>

                        <!-- Telefone -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Telefone" name="txtTelefonePj" id="txtTelefonePj">
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
                            <input class="input_estilo inputs_form" type="text" placeholder="User" name="txtUserPj" id="txtUserPj">
                        </div>

                        <!-- Senha -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="password" placeholder="Senha" name="txtSenhaPj" id="txtSenhaPj">
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
