<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'S -Endereço</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/cadastro_edicao_pessoa_juridica.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
        <link rel="stylesheet" href="css/arielle.css">
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


    <div class="form_compra">
      <div class="status_compra"></div>
      <p>
        <strong>Atenção:</strong> os campos com * são obrigatórios, preencha com atenção.
      </p>

      <div class="formulario_endereco">
        <label>Nome do Destinatário:</label><label style="color:red;">*</label> <br>
        <input type="text" name="" value=""><br>

        <label>Logradouro:</label><label style="color:red;">*</label> <br>
        <input type="text" name="" value=""><br>

        <label>Cidade:</label><label style="color:red;">*</label> <br>
        <input type="text" name="" value=""><br>
      </div>

      <div class="formulario_endereco">
        <label>CEP:</label><label style="color:red;">*</label> <br>
        <input type="text" name="" value=""><br>

        <label>N:</label><label style="color:red;">*</label> <br>
        <input type="text" name="" value=""><br>

        <label>Estado:</label><label style="color:red;">*</label> <br>
        <select name="uf" id="uf">
        	<option value="">Selecione</option>
        	<option value="AC">AC</option>
        	<option value="AL">AL</option>
        	<option value="AM">AM</option>
        	<option value="AP">AP</option>
        	<option value="BA">BA</option>
        	<option value="CE">CE</option>
        	<option value="DF">DF</option>
        	<option value="ES">ES</option>
        	<option value="GO">GO</option>
        	<option value="MA">MA</option>
        	<option value="MG">MG</option>
        	<option value="MS">MS</option>
        	<option value="MT">MT</option>
        	<option value="PA">PA</option>
        	<option value="PB">PB</option>
        	<option value="PE">PE</option>
        	<option value="PI">PI</option>
        	<option value="PR">PR</option>
        	<option value="RJ">RJ</option>
        	<option value="RN">RN</option>
        	<option value="RS">RS</option>
        	<option value="RO">RO</option>
        	<option value="RR">RR</option>
        	<option value="SC">SC</option>
        	<option value="SE">SE</option>
        	<option value="SP">SP</option>
        	<option value="TO">TO</option>
         </select>
      </div>
      
      <a href="pagamento.php">
        <input type="button" name="btnConcluir" value="Concluir">
      </a>
    </div>

    <footer><?php require_once 'footer.html'; ?></footer>
  </body>
</html>
