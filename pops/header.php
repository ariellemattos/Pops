<script>
$(document).ready(function(){
  //CHAMAR MODAL
  $('.login').click(function(){
    login();
    $('#container').fadeIn(600);

  });
});

function login(){
  $.ajax({
    type: "GET",
    url: "modal-login.php",
    success: function(dados){
      $("#modal").html(dados)
    }
  });
}
</script>

<div id="container">
  <div id="modal">

  </div>
</div>
<div class="login">

</div>
<div id="caixa_cabecalho" class="centralizarX">
  <img src="img/logo.png" alt="Logo">
</div>
<nav>
  <div class="navbar centralizarX centralizarY">
  <a href="index.php">Home</a>
  <a href="produtos.php">Produtos</a>
  <a href="promocoes.php">Promoções</a>
  <a href="loja.php">Loja Pop'S</a>
  <div class="dropdown">
    <button class="dropbtn">Eventos e Anúncios
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="anuncios.php">Anúncios</a>
      <a href="eventos.php">Eventos</a>
      <a href="pops_escola.php">POP'S nas Escolas</a>
      <a href="patrocinios.php">Nossos Patrocínios</a>
      <a href="videos.php">Vídeos</a>
      <a href="noticias.php">Notícias</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Estabelecimentos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="estabelecimento_proximo.php">Estabelecimentos Próximos</a>
      <a href="cred_est_comerciais.php">Credenciamento de Estabelecimentos Comerciais</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Pop'S
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sobre.php">Sobre a Pop'S</a>
      <a href="historia_marca.php">História da Marca</a>
    </div>
  </div>
  <a href="fale_conosco.php">Entre em Contato</a>
</div>
</nav>
