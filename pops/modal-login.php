<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/arielle.css">
    <script src="js/ws_requests.js"></script>
  </head>
  <body>
    <script>
    $(document).ready(function(){
      //function para fechar a modal

      $('#fechar').click(function(){
        $('#container').fadeOut(400);
      });
    });
    </script>

    <div class="modal-login">
      <div class="modal-header-login">
        <h4 class="modal-title-login">
          Login
          <a href="#" id="fechar" class="modal-fechar"> </a>
        </h4>

      </div>

      <div class="modal-body-login">
        <div class="modal-content-login">
          <div class="icone-login"> </div>
          <div class="modal-form-login">
            <form class="form-login"  action="index.html" method="post">
              <p class="modal-title-campos-login"> Usuario:
                <input type="text" name="txtuser" id="txtuser"> 
              </p>

              <p class="modal-title-campos-login"> Senha:
                <input type="password" name="txtpassword" id="txtpassword">
              </p>
              <input type="button" name="btnlogar" id="btnlogar" value="Login">
            </form>
          </div>
        </div>
      </div>
      <div id="msg_login"></div>
      <div class="modal-footer-login">
        <a href="cadastro.php" id="escolha">Paticipe da rede Pop's</a>
      </div>
    </div>
  </body>
</html>
