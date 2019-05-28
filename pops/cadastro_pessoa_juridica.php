<?php
  session_start();
  // Iniciando as variáveis em null para não haver erro
  $path_local = null;
  $path_url = null;

  // Variáveis que recebem as variáveis de sessão
  $path_local = $_SESSION['path_local'];
  $path_url = $_SESSION['path_url'];

  // Verificando se o objeto existe
  if (isset($_POST["btnCad"])) {
    // Importando a classe Controller de pessoa fisica
    require_once "$path_local/cms/controller/controllerPessoaJuridica.php";

    // Instância da Controller de pessoa fisica
    $controllerPessoaJuridica = new ControllerPessoaJurica();

    // Chamando o método de inserir um novo registro
    $controllerPessoaJuridica->inserirRegistro();
  }


 ?>

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
            <form name="frmCadPjs" method="POST" enctype="multipart/form-data">
                <!-- caixa que guarda todo o formulário -->
                <div class="caixa_form_juridica">
                    <!-- LINHA 1-->
                    <div class="caixa_input">
                        <!-- CNPJ -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="CNPJ" name="txtCnpj" id="txtCnpj">
                        </div>
                        <!-- Razão Social -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Razão Social" name="txtRazaoSocial" id="txtRazaoSocial">
                        </div>

                        <!-- Nome Fantasia-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Nome fantasia" name="txtNomeFantasia" id="txtNomeFantasia">
                        </div>
                    </div>

                    <!-- LINHA 2-->
                    <div class="caixa_input">
                        <!-- Logradouro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Logradouro" name="txtLogradouro" id="txtLogradouro">
                        </div>
                        <!-- num -->
                        <div class="caixa_inputs_form caixa_inputs_form_minima">
                            <input class="input_estilo inputs_form" type="text" placeholder="Nº" name="txtNum" id="txtNum">
                        </div>
                        <!-- Bairro-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Bairro" name="txtBairro" id="txtBairro">
                        </div>
                        <!-- CEP-->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="CEP" name="txtCep" id="txtCep">
                        </div>
                        <!-- Cidade -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Cidade" name="txtCidade" id="txtCidade">
                        </div>
                        <!-- Estado -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <div class="caixa_input largura_fixa_div_3 selectForm">
                                <select class="slt_estado formatacao_inputs borda_inputs largura_fixa_inputs_3 slt_estado" id="sltEstado" name="sltEstado">
                                    <option disabled selected name="slcEstado">Estado:</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- LINHA 3-->
                    <div class="caixa_input">
                        <!-- Responsavel pelo Contato -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Responsável pelo contato" name="txtRespContato" id="txtRespContato">
                        </div>

                        <!-- Email-->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Email" name="txtEmail" id="txtEmail">
                        </div>

                        <!-- Telefone -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Telefone" name="txtTelefone" id="txtTelefone">
                        </div>

                        <!-- Celular  -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="Celular" name="txtCelular" id="txtCelular">
                        </div>
                    </div>

                    <!-- Linha 4 -->
                    <!-- LINHA 3-->
                    <div class="caixa_imagem">
                        <div class="imagem_pj">
                            <label class="label_estilo">Foto:</label><br>
                            <input type="file" name="fotoPj" id="fotoPj">
                        </div>
                        <!-- Usuário -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="text" placeholder="User" name="txtUser" id="txtUser">
                        </div>

                        <!-- Senha -->
                        <div class="caixa_inputs_form caixa_inputs_form_pequena">
                            <input class="input_estilo inputs_form" type="password" placeholder="Senha" name="txtSenha" id="txtSenha">
                        </div>
                    </div>

                    <!-- LINHA 4 BOTÃO -->
                    <div class="caixa_botao_pj">
                        <input class="botao_pj" type="submit" value="Cadastrar" name="btnCad" id="btnCad">
                    </div>

                </div>
            </form>
        </div>
        <footer>  <?php require_once('footer.html')?> </footer>
    </body>
</html>
