<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/murilo.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/arielle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/event.js"></script>
    <script src="js/effects.js"></script>
  </head>
  <body>
    <?php
      session_start();
      require_once('../cms/model/DAO/conexao.php');
      $conex = new Conexao();
      $con = $conex->connectDatabase();

    ?>
    <header><?php require_once 'header.php'; ?></header>
    <div class="teste_produto">
      <div class="principal">
        <div class="area-produtos">
          <?php
            $sql = "SELECT * FROM tbl_produto WHERE status = 1";
            $stm = $con->prepare($sql);
            $success = $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
        	?>
          <div class="section-six-products">
            <div class="section-six-image-products centralizar_elemento">
              <img src="../cms/view/img/temp/<?php echo ($result['imagem']) ?>" alt="Produto">
            </div>
            <div class="section-six-text-products">
              <h2><?php echo (utf8_decode($result['nome'])) ?></h2>
            </div>

            <div class="section-six-button">
              <input type="button" name="btn_tabelanutricional" value="Tabela nutrional">
            </div>

          </div>

          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <footer><?php require_once 'footer.html'; ?></footer>
  </body>
</html>
