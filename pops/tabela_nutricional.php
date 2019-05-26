<?php
// Iniciando uma sessão
session_start();

// Iniciando as variáveis em null para não haver erro
$path_local = null;
$path_url = null;

// Variáveis que recebem as variáveis de sessão
$path_local = $_SESSION['path_local'];
$path_url = $_SESSION['path_url'];

  if(isset($_GET["id"])){
    // Importando a controller de enquetes
    // require_once "$path_local/cms/controller/controllerProduto.php";

    // // Instânciando a classe do controler
    // $controllerProduto = new ControllerProduto();
    //
    // // Result set que recebe os dados
    // $rsProduto = $controllerProduto->buscarRegistro();



  }
 ?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Tabela nutrional</title>
    <link rel="stylesheet" href="css/arielle.css">
  </head>
  <body>
    <div class="modal-tabela-nutrional">
      <div class="modal-header-tabela-nutrional">
        <h4> Informações nutrional </h4>
        <h5> Tipo da porção </h5>
      </div>
      <div class="quantidade-porcao">
        <h5><strong>Quantidade por porção</strong> </h5>
      </div>

      <div class="porcentagem-porcao">
        <h5> <strong> </strong></h5>
      </div>

      <div class="quantidade-porcao">
        <h5>Valor energetico </h5>
      </div>

      <div class="porcentagem-porcao">
        <h5> </h5>
      </div>

      <div class="quantidade-porcao">
        <h5> Carboidratos </h5>
      </div>

      <div class="porcentagem-porcao">
        <h5> </h5>
      </div>

      <div class="quantidade-porcao">
        <h5>Proteínas </h5>
      </div>

      <div class="porcentagem-porcao">
        <h5> </h5>
      </div>

      <div class="quantidade-porcao">
        <h5>Gorduras totais </h5>
      </div>

      <div class="porcentagem-porcao">
        <h5></h5>
      </div>

    </div>
  </body>
</html>
