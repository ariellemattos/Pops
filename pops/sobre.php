<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sobre</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/sobre.css">
    <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CHAMANDO O JQUERY -->
    <script src="js/jquery.js">
    </script>
    <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
    <script src="js/event.js">
    </script>
     <script src="js/effects.js"></script>
</head>
    <body>

        <!-- header -->
          <header>
            <?php require_once('header.php') ?>
          </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Sobre</h1>
        </div>

        <!-- caixa que contém todo o conteúdo -->
        <div class="caixa_geral_sobre centralizar_div caixa_crescer">
            <div class="caixa_principal_sobre centralizar_div caixa_crescer">
                <!-- CAIXA DA IMAGEM E TITULO -->
                <div class="caixa_titulo_e_imagem centralizar_div">
                    <div class="imagem div_esquerda">
                        <img src="img/missao.png" width="80" height="50" title="missao icon" alt="Imagen não encontrada">
                    </div>
                    <div class="titulo-sobre div_direita">
                        <h1>Missão</h1>
                    </div>
                </div>

                <div class="caixa_texto centralizar_div caixa_crescer">
                    <p>
                    Nossa missão é revolucionar o e-commerce de bebidas e 
                    atingir positivamente e diretamente o nosso público 
                    jurídico e físico.

                    </p>
                </div>

            </div>

            <div class="caixa_principal_sobre centralizar_div caixa_crescer">
                <!-- CAIXA DA IMAGEM E TITULO -->
                <div class="caixa_titulo_e_imagem centralizar_div">
                    <div class="imagem div_esquerda">
                        <img src="img/visao.png" width="80" height="50" title="visao icon" alt="Imagen não encontrada">
                    </div>
                    <div class="titulo-sobre div_direita">
                        <h1>Visão</h1>
                    </div>
                </div>

                <div class="caixa_texto centralizar_div caixa_crescer">
                    <p>
                    Ser referência mundial no comércio de bebidas não alcoólicas e  
                    garantia para todos os serviços prestados aos nossos clientes.

                    </p>
                </div>

            </div>

            <div class="caixa_principal_sobre centralizar_div caixa_crescer">
                <!-- CAIXA DA IMAGEM E TITULO -->
                <div class="caixa_titulo_e_imagem centralizar_div">
                    <div class="imagem div_esquerda">
                        <img src="img/valores.png" width="80" height="50" title="valores" alt="Imagen não encontrada">
                    </div>
                    <div class="titulo-sobre div_direita">
                        <h1>Valores</h1>
                    </div>
                </div>

                <div class="caixa_texto centralizar_div caixa_crescer">
                    <p>
                        Inovação - Parceria com nossos Clientes - Confiança do Clientes - 
                        Ética e transparência nas relações e no exercício das atividades - 
                        Valorização do ser humano - Preservaçao do meio ambiente.
                    </p>
                </div>

            </div>
        </div>

        <!-- footer -->
      <footer>  <?php require_once('footer.html') ?> </footer>
    </body>
</html>
