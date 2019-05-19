<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'S - Cadastro e Edição Pessoa Física</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/cadastro_edicao_pessoa_fisica.css">
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
            <h1>Cadastro perfil pessoa física</h1>
        </div>

        <!-- Caixa central do formulário que ocupa 1200 da tela -->
        <div class="caixa_central_formulario">
            <!-- caixa que guarda todo o formulário -->
            <div class="caixa_form_fisica">
                <!-- div dos labels e inputs do form -->
                <!-- nome completo -->
                <div class="campos_form_fisica">
                    <label for="txtNomePessoaFisica" class="label_estilo font-texto">Nome Completo: </label><br>
                    <input class="input_estilo input_largura_grande" type="text" name="txtNomePessoaFisica" id="txtNomePessoaFisica">
                </div>

                <!-- Email -->
                <div class="campos_form_fisica">
                    <label for="txtEmailpessoaFisica" class="label_estilo font-texto">Email: </label><br>
                    <input class="input_estilo input_largura_grande" type="text" name="txtEmailPessoaFisica" id="txtEmailPessoaFisica">
                </div>

                <!-- CPF: -->
                <div class="campos_form_fisica">
                    <label for="txtCpfPessoaFisica" class="label_estilo font-texto">CPF: </label><br>
                    <input class="input_estilo input_largura_media" type="text" name="txtCpfPessoaFisica" id="txtCpfPessoaFisica">
                </div>

                <!-- Celular -->
                <div class="campos_form_fisica">
                    <label for="txtCelPessoaFisica" class="label_estilo font-texto">Celular: </label><br>
                    <input class="input_estilo input_largura_media" type="text" name="txtCelPessoaFisica" id="txtCelPessoaFisica">
                </div>

                <!-- Foto -->
                <div class="campos_form_fisica">
                    <label class="label_estilo font-texto">Foto: </label><br>
                    <img width="150" height="150" src="imagens/a.jpg" alt="Imagem não encontrada" title="ola">
                    <input id="btnSalvarImagem" type="file" value="Salvar"><br>
                </div>

                <!-- Logradouro -->
                <div class="campos_form_fisica">
                    <label for="txtLogradouroFisica" class="label_estilo font-texto">Logradouro: </label><br>
                    <input class="input_estilo input_largura_grande" type="text" name="txtLogradouroFisica" id="txtLogradouroFisica">
                </div>

                <!-- Número -->
                <div class="campos_form_fisica">
                    <label for="txtNumFisica" class="label_estilo font-texto">Nº: </label><br>
                    <input class="input_estilo input_largura_pequena" type="text" name="txtNumFisica" id="txtNumFisica">
                </div>

                <!-- Bairro -->
                <div class="campos_form_fisica">
                    <label for="txtBairroFisica" class="label_estilo font-texto">Bairro: </label><br>
                    <input class="input_estilo input_largura_grande" type="text" name="txtBairroFisica" id="txtBairroFisica">
                </div>

                <!-- Cidade -->
                <div class="campos_form_fisica">
                    <label for="txtCidade" class="label_estilo font-texto">Cidade: </label><br>
                    <input class="input_estilo input_largura_grande" type="text" name="txtLogradouroFisica" id="txtCidade">
                </div>

                <!-- Estado -->
                <div class="campos_form_fisica">
                    <label class="label_estilo font-texto">Estado: </label><br>
                    <select class="input_estilo input_largura_media" name="txtCelPessoaFisica" id="txtEstadoPessoaFisica">
                        <option> SP </option>
                    </select>
                </div>

                <!-- Usuário -->
                <div class="campos_form_fisica">
                    <label for="txtCelPessoaFisica" class="label_estilo font-texto">User: </label><br>
                    <input class="input_estilo input_largura_media" type="text" name="txtUserPessoaFisica" id="txtUserPessoaFisica">
                </div>

                <!-- Senha -->
                <div class="campos_form_fisica">
                    <label for="txtSenhaPessoaFisica" class="label_estilo font-texto">Senha: </label><br>
                    <input class="input_estilo input_largura_media" type="text" name="txtCelPessoaFisica" id="txtSenhaPessoaFisica">
                </div>

                <!-- Celular -->
                <div id="caixa_botao">

                    <input class="botao" type="button" name="btnCadPessoaFisica" id="txtCelPessoaFisica" value="Cadastrar">
                </div>
            </div>
        </div>
       <footer> <?php require_once('footer.html') ?> </footer> 
    </body>
</html>
