<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'Soda Drink - Pagamento</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/pagamento.css">
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
        <!-- header -->
       <header>
           <?php require_once('header.php')?>
       </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Pagamento</h1>
        </div>

        <div class="caixa_central_pagamento">
            <form name="frmPagamento" method="POST" action="pagamento.php">

                <!-- Grupos form 1  -->
                <div class="caixa_form_pagamento">
                    <!-- NOME -->
                    <div class="caixa_grupo_form div_esquerda">
                        <div class="caixa_campos_form">
                            <label for="txtNome" class="label_estilo font-titulo">Nome do titular do cartão: </label><br>
                            <input class="input_estilo input_titular_e_cartao" type="text" name="txtNome" id="txtNome">
                        </div>

                        <!-- Número do Cartão -->
                        <div class="caixa_campos_form">
                            <label for="txtNumCartao" class="label_estilo font-titulo">Número do cartão: </label><br>
                            <input class="input_estilo input_titular_e_cartao" type="text" name="txtNumCartao" id="txtNumCartao">
                        </div>

                        <!-- Número do Cartão -->
                        <div class="caixa_campos_form">
                            <label class="label_estilo font-titulo">Validade: </label><br>
                            <select id="sltValidadeNum1" class="input_estilo input_validade">
                                <option>1</option>
                                <option>2</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>

                    <!-- caixa form 2 -->
                    <div class="caixa_grupo_form div_direita">
                        <!-- Número do Cartão -->
                        <div class="caixa_campos_form margin_top_form_2">
                            <label for="txtCodSeguranca" class="label_estilo font-titulo">Código de Segurança: </label><br>
                            <input class="input_estilo input_seguranca" type="text" name="txtCodSeguranca" id="txtCodSeguranca">
                            <div class="imagem_cartao div_direita">
                                <img src="img/cartao.png" width="40" height="40" title="Código de Segurança" alt="Imagem não encontrada2">
                            </div>
                        </div>

                        <!-- Número do Cartão -->
                        <div class="caixa_campos_form">
                            <label class="label_estilo font-titulo">a</label><br>
                            <select id="sltValidadeNum2" class="input_estilo input_validade">
                                <option>1</option>
                                <option>2</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>

                    <!-- Botão finalizar -->
                    <div class="caixa_botao_pagamento">
                        <input class="botao_pagamento font-titulo" type="button" value="Finalizar Compra" id="btnFinalizarCompra" name="btnFinalizarCompra">
                    </div>
                </div>

            </form>
        </div>
        <footer>   <?php require_once('footer.html')?> </footer>
    </body>
</html>
