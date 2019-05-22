<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>Index</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/murilo.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/arielle.css">
  <link rel="stylesheet" href="css/loading.css">
  <link rel="stylesheet" href="css/effects.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
   <script src="js/effects.js"></script>
</head>
<body>
      <?php
  // Variáveis que recebem a URL e o caminho local
        $path_url = "http://".$_SERVER['HTTP_HOST']."/Tcc";
        $path_local = $_SERVER['DOCUMENT_ROOT']."/Tcc";

        session_start();
        // Criando variáveis de sessões que recebem esses valores
        $_SESSION['path_url'] = $path_url;
        $_SESSION['path_local'] = $path_local;

        require_once('../cms/model/DAO/conexao.php');

        require_once('../cms/model/DAO/promocaoDAO.php');
        $conex = new Conexao();
        $con = $conex->connectDatabase();
      ?>
      <header>
        <?php require_once 'header.php'; ?>
      </header>
    <div id="loading">
     <div id="loader"></div>
    </div>
      <div id="index_principal" style="display:none;">
      <div id="inicio" class="centralizarY">
        <div id="conteudo_inicio" class="centralizarX">
          <div id="titulo_inicio" class="fadeInLeft"  style="font-family:Helvetica;">
            Já conhece os produtos da POP'S?
          </div>
          <div id="texto_inicio" class="fadeInRight">
             A POP'Soda Drink é uma fornecedora de bebidas não alcoólicas, como: refrigerantes, sucos naturais, polpas e água tônica. Confira todos os benefícios que você terá ao navegar o nosso site!
          </div>
        </div>
      </div>
      <!-- SECTION 6 -->
      <section class="section-six">
        <h1 class="titulo_sections">Produtos em destaque</h1>
        <div class="section-six-conteudo centralizar_elemento">

          <?php
            $sql = "SELECT * FROM tbl_produto WHERE status_home = 1 ORDER BY RAND() LIMIT 4";
            $stm = $con->prepare($sql);
            $success = $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
        	?>
            <div id="box_products" class="section-six-div-products fadeInTop">
              <div class="section-six-products">
                <div class="section-six-image-products centralizar_elemento">

                  <img src="../cms/view/img/temp/<?php echo ($result['imagem']) ?>" alt="Produto">

                </div>
                <div class="section-six-text-products">
                  <h2><?php echo ($result['nome']) ?></h2>
                </div>

                <div class="section-six-button">
                  <input type="button" value="Tabela nutrional">

                </div>

              </div>
            <?php } ?>
          </div>
        </div>

      </section>
      <!-- SECTION 2 -->
      <section class="section-two">
        <h1 class="titulo_sections">Participe das enquetes da POP'S</h1>
        <div id="enquetes" class="div-geral-section-imagens centralizar_elemento fadeInTop">
          <div class="imagens-section-two centralizarY">
            <div  class="caixa_enquete centralizar_elemento">
              <div class="titulo_enquete">Qual é o seu refrigerante favorito?</div>
              <div class="itens_enquete centralizar_elemento">
                <input type="checkbox" id="1">
                <label for="1">7up</label>
                <br><br>
                <input type="checkbox" id="2">
                <label for="2">Gini</label>
                <br><br>
                <input type="checkbox" id="3">
                <label for="3">Crush</label>
                <br><br>
                <input type="checkbox" id="4">
                <label for="4">Grapette</label>
              </div>
              <input type="submit" class="btn_votar" value="Votar">
            </div>
          </div>
          <div class="imagens-section-two centralizarY">
            <div  class="caixa_enquete centralizar_elemento">
              <div class="titulo_enquete">Qual é o seu sabor de suco favorito?</div>
              <div class="itens_enquete centralizar_elemento">
                <input type="checkbox" id="5">
                <label for="1">Laranja</label>
                <br><br>
                <input type="checkbox" id="6">
                <label for="2">Uva</label>
                <br><br>
                <input type="checkbox" id="7">
                <label for="3">Morango</label>
                <br><br>
                <input type="checkbox" id="8">
                <label for="4">Maracujá</label>
              </div>
              <input type="submit" class="btn_votar" value="Votar">
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 3 -->
      <section class="section-three">
        <h1 class="titulo_sections">Promoção do mês</h1>
        <div id="promo" class="section-three-conteudo centralizar_elemento fadeInTop">
          <div class="section-three-conteudo-infomarcao">
            <?php
              $sql = "SELECT * FROM tbl_promocao WHERE status_home = 1 ORDER BY rand() LIMIT 1";
              $stm = $con->prepare($sql);
              $success = $stm->execute();
              foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
            ?>
              <div class="section-three-conteudo-titulo"><?php echo (utf8_decode($result['titulo'])) ?></div>
              <div class="section-three-conteudo-texto">
                <?php echo (utf8_decode($result['descricao'])) ?>
              </div>
              <!--<button type="button">
                Regulamento
              </button>
              -->
          </div>
          <div class="section-three-conteudo-imagem centralizarY">
            <img src="../cms/view/img/temp/<?php echo ($result['img_promo']) ?>" width="330" height="250" title="volei Hinode" alt="Imagem não encontrada" class="imgPatrocinio">
          </div>

          <?php } ?>
        </div>
      </section>

      <!-- SECTION 4 -->
      <section class="section-four">
        <h1 class="titulo_sections">Fique de olho na POP'S</h1>
        <div  id="news" class="section-four-conteudo centralizar_elemento fadeInLeft">
            <?php
              $sql = "SELECT * FROM tbl_noticia WHERE status_home = 1 ORDER BY rand() LIMIT 1";
              $stm = $con->prepare($sql);
              $success = $stm->execute();
              foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
            ?>

          <div class="caixa_noticia ">
            <div class="caixa_noticia-imagem centralizarY">
              <img class="centralizar_elemento" src="../cms/view/img/temp/<?php echo ($result['imagem']) ?>" alt="Notícia">
            </div>
            <div class="caixa_noticia-infomarcao">
              <div class="informacoes">
                <div class="caixa_noticia-titulo">
                  <?php echo ($result['titulo']) ?>
                </div>
                <div class="caixa_noticia-texto">
                  <?php echo ($result['descricao']) ?>
                </div>
                <div class="caixa_noticia-data">
                  <?php echo date('d/m/Y', strtotime($result['dt_noticia'])); ?>
                </div>
              </div>
            </div>
          </div>

            <?php } ?>
          <div class="caixa_noticia-botao">
            <button type="button" name="button">
              <a href="noticias.php">Mais notícias</a>
            </button>
          </div>
          <div class="caixa_email centralizar_elemento">
            <div class="caixa_input">
              <label for="txt_email" style="font-family:Helvetica;">Deseja receber emails da POP'S?</label>
              <input type="text" id="txt_email" name="txt_email">
            </div>
            <div class="caixa_botao_email">
              <button type="button" name="button">Enviar</button>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 5 -->
      <section class="section-five">
        <h1 class="titulo_sections">POP'S Ecológico</h1>
        <?php
          $sql = "SELECT * FROM tbl_sustentavel WHERE status = 1 LIMIT 1";
          $stm = $con->prepare($sql);
          $success = $stm->execute();
          foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
        ?>
        <div id="sustentavel" class="section-five-conteudo centralizar_elemento fadeInTop">
          <div class="caixa_sustentavel-imagem centralizarY">
            <img class="centralizar_elemento" src="../cms/view/img/temp/<?php echo ($result['imagem']) ?>" alt="Ecológico">
          </div>
          <div class="caixa_sustentavel-infomarcao">

            <div class="caixa_sustentavel-titulo">
              Planeta Sustentável
            </div>
            <div class="caixa_sustentavel-texto">
              <?php echo ($result['descricao']) ?>
            </div>
          </div>
        </div>

        <?php } ?>

      </section>
      <section class="section-eight">
        <h1 class="titulo_sections">Comentários POP'S</h1>
        <div id="comments" class="section-eight-conteudo centralizar_elemento">
          <div class="caixa_comentario centralizar_elemento">
          <?php
            $sql = "SELECT comentario.*, pessoa_fisica.nome AS pessoa_nome
            FROM tbl_comentario AS comentario
            INNER JOIN tbl_pessoa_fisica AS pessoa_fisica ON pessoa_fisica.id_p_fisica = comentario.id_p_fisica";
            $stm = $con->prepare($sql);
            $success = $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){
          ?>
            <div class="section-eight-usuario">
              <div class="section-eight-usuario-imagem centralizarY">
                <img class="centralizar_elemento" src="img/icon_user.png" alt="Usuário">
              </div>
              <div class="section-eight-usuario-nome">
                <?php echo ($result['pessoa_nome']) ?>
              </div>
              <div class="section-eight-usuario-comentario">
                <?php echo ($result['descricao']) ?>
              </div>
            </div>

            <div class="section-eight-resposta">
              <div class="caixa_input">
                <label for="txt_resposta">Resposta</label>
                <input type="text" id="txt_resposta" name="txt_resposta">
              </div>
              <div class="caixa_botao_email">
                <button type="button" name="button">Enviar</button>
              </div>
            </div>

			<?php } ?>
          </div>
        </div>




    </section>
    <footer>
      <?php require_once 'footer.html'; ?>
    </footer>
      </div>
</body>
</html>
