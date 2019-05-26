<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/arielle.css">
    <link rel="stylesheet" href="../cms/view/css/style.css">
  </head>
  <body>
    <div class="loginMain">
      <!-- Caixa de autenticacao -->
      <div class="caixa_login centralizarX">
        <div>
          <h1>Identificação</h1>
        </div>
        <form action="<?= "$path_url/cms/autentica.php" ?>" method="POST">
          <i class="fas fa-user-tie"></i>
          <label for="txt_usuario">Usuário</label>
          <input type="text" id="txt_usuario" name="txt_usuario" placeholder="Digite seu usuário...">

          <i class="fas fa-lock"></i>
          <label for="txt_senha">Senha</label>
          <input type="password" id="txt_senha" name="txt_senha" placeholder="Digite sua senha...">
          <input type="submit" name="btn_login" value="Entrar">
        </form>
      </div>
    </div>

    <!-- Imagem da tela de login -->
    <div class="bannerLogin"></div>
  </body>
</html>
