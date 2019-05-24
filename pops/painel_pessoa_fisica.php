<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>POP'S - Perfil Pessoa Física</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/painel_pessoa_fisica.css">
    <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CHAMANDO O JQUERY -->
	<script src="js/jquery.js">
	</script>
	<!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
	<script src="js/event.js">
	</script>


</head>
    <body>
      <header>
        <?php require_once 'header.php' ?>
      </header>
        <!-- caixa que ocupa 100% de altura e largura -->
        <div class="caixa_geral_pessoa_fisica centralizar_caixa">
            <div class="caixa_central_pessoa_fisica centralizar_caixa">

                <!-- FOTO E NOME-->
                <div class="caixa_identidade">

                    <img src="img/a.jpg" id="foto" width="245" height="250" title="">


                </div>

                <!-- INFORMAÇÕES USER -->
                <div class="informacoes_pessoa_fisica">
                    <div class="caixa_titulo_inf tamanho_caixa_nome">
                        <p>
                            <span class="font-titulo font-negrito">Nome:</span>
                            <span class="font-texto" id="nome">popssodadrink@hotmail.com</span>

                        </p>
                    </div>
                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">CPF:</span>

                        <span class="font-texto color-blue" id="cpf">06604-220</span>
                    </div>
                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">Celular:</span>
                        <span class="font-texto color-blue" id="celular">(00) 95353-8395</span>

                    </div>
                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">Celular:</span>
                       <span class="font-texto color-blue" id="celular"></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_logradouro_bairro">
                        <span class="font-titulo font-negrito">Logradouro:</span>
                        <span class="font-texto color-blue" id="logradouro">Rua Senai Jandira</span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_numero">
                        <span class="font-titulo font-negrito">Nº:</span>

                        <span class="font-texto color-blue" id="num">167</span>

                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_logradouro_bairro">
                        <span class="font-titulo font-negrito">Bairro:</span>
                        <span class="font-texto color-blue" id="bairro">Jd.Senai Jandira</span>

                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_cidade">
                        <span class="font-titulo font-negrito">Cidade:</span>
                        <span class="font-texto color-blue" id="cidade">Jandira</span>

                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">Estado:</span>

                        <span class="font-texto color-blue" id="uf">SP</span>

                    </div>

                </div>

                <!-- COMENTÁRIO -->
                <section id="comentario">
                    <form class="form-comentario" id="form-comentario" action="painel_pessoa_fisica.php" method="POST">
                        <h1 class="font-titulo font-negrito color-blue">Comentário</h1>
						    <textarea class="font-texto" type="text" name="txtComentario" id="txtComentario"></textarea><br>
                        <input class="botao_comentario" type="submit" value="Enviar">
                    </form>
                </section>
            </div>
        </div>
        <footer>  <?php require_once('footer.html')?> </footer>
      
      <!-- CHAMANDO O ARQUIVO DE REQUESTS EM JQUERY -->
        <script src="js/ws_requests.js">
        </script>
		    <script>

        $(document).ready(function(){
                  //SELECIONAR DADOS VIA COOKIE
          getAllData();
              });
		</script>
    </body>
</html>
