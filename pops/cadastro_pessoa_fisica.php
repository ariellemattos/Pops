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
        <script src="js/validarCampos.js"></script>
    </head>

    <body>
        <header>
             <?php require_once('header.php'); ?>
        </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Cadastro - pessoa física</h1>
        </div>

        <!-- Caixa central do formulário que ocupa 1200 da tela -->
        <div class="caixa_central_formulario">
            <!-- caixa que guarda todo o formulário -->
            <div class="caixa_form_fisica">
                <form name="frmCadPf" id="frmCadPf" method="POST">
                    <!-- div dos labels e inputs do form -->
                    <!-- nome completo -->
                    
                    <div class="caixa_input">
                        <!-- Nome completo -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Nome completo" name="txtNome" id="txtNome" onkeypress="return validarCampos(event, 'number', this.id);" required>
                        </div>
                        <!-- CPF -->
                        <div class="caixa_inputs_form caixa_inputs_form_2">
                            <input class="input_estilo inputs_form" placeholder="CPF" type="text" name="txtCpf" id="txtCpf" onkeypress="return validarCampos(event, 'caracter', this.id);" required>
                        </div>
                    </div>

                    <div class="caixa_input">
                        <!-- E-mail -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="email" placeholder="E-mail" name="txtEmail" id="txtEmail" required>
                        </div>
                        <!-- Celular -->
                        <div class="caixa_inputs_form caixa_inputs_form_2">
                            <input class="input_estilo inputs_form" placeholder="Celular" type="text" name="txtCelular" id="txtCelular" required onkeypress="return validarCampos(event, 'caracter', this.id);" required>
                        </div>
                    </div>

                    <div class="caixa_input">
                        <!-- Logradouro -->
                        <div class="caixa_inputs_form caixa_inputs_form_medio">
                            <input class="input_estilo inputs_form" type="text" placeholder="Logradouro" name="txtLogradouro" id="txtLogradouro" onkeypress="return validarCampos(event, 'number', this.id);" required >
                        </div>
                        <!-- Número -->
                        <div class="caixa_inputs_form caixa_inputs_form_2">
                            <input class="input_estilo inputs_form" placeholder="N°" maxlength="4" type="text" name="txtNumero" id="txtNumero" onkeypress="return validarCampos(event, 'caracter', this.id);" required>
                        </div>
                    </div>

                    <div class="caixa_input">
                        <!-- Bairro -->
                        <div class="caixa_inputs_form caixa_inputs_form_4">
                            <input class="input_estilo inputs_form" type="text" placeholder="Bairro" name="txtBairro" id="txtBairro" onkeypress="return validarCampos(event, 'number', this.id);" required>
                        </div>
                        <!-- Cidade -->
                        <div class="caixa_inputs_form caixa_inputs_form_4">
                            <input class="input_estilo inputs_form" placeholder="Cidade" type="text" name="txtCidade" id="txtCidade" required onkeypress="return validarCampos(event, 'number', this.id);">
                        </div>
                        
                    </div>

                    <div class="caixa_input">
                        <!-- Estado -->
                        <div class="caixa_input largura_fixa_div_3 selectForm">
                            <select class="slt_estado formatacao_inputs borda_inputs largura_fixa_inputs_3 slt_estado" id="sltEstado" name="sltEstado" required>
                                <option disabled selected>Estado:</option>
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

                        <!-- Foto -->
                        <div class="imagem_pf">
                            <label class="label_estilo">Foto:</label><br>
                            <input type="file" name="txtFotoPj" id="txtFotoPj" required>
                        </div>
                    </div>

                    <div class="caixa_input">
                        <!-- User -->
                        <div class="caixa_inputs_form caixa_inputs_form_5">
                            <input class="input_estilo inputs_form" type="text" placeholder="User" name="txtUser" id="txtUser" required>
                        </div>
                        <!-- Senha -->
                        <div class="caixa_inputs_form caixa_inputs_form_4">
                            <input class="input_estilo inputs_form" placeholder="Senha" type="password" name="txtSenha" id="txtSenha" required>
                        </div>
                        
                    </div>

                    <div class="botao">
                        <input class="botao" type="submit" value="Enviar" name="btnEnviar" id="btnEnviar">
                    </div>
                </form>
            </div>
        </div>
       <footer> <?php require_once('footer.html') ?> </footer> 
       
       <script src="js/jquery.mask.js"></script>
        <script>
            $(document).ready(function(){
                $('#txtCpf').mask('00000-000');
                $('#txtCelular').mask('(00) 00000-0000');
            }); 
        </script>
    </body>
</html>
