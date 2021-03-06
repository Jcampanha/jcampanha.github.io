
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>MyDropbox - Seus documentos em qualquer lugar</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">MyDropbox<i class="material-icons">system_update_alt</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="smoothScroll" href="acesso.html">Acessar Conta</a></li>
        <li><a class="smoothScroll" href="cadastro.html">Cadastre-se</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="smoothScroll" href="acesso.html">Acessar Conta</a></li>
        <li><a class="smoothScroll" href="cadastro.html">Cadastre-se</a></li>
      </ul>
      <a href="index.html" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>

  <div id="index-banner" class="grey lighten-3">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row ">
          <form class="col s12">
            <br><br>
            <div class="row">
              <div class="input-field col s6">
                <input id="login" type="text" class="validate">
                <label for="login">Login</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="senha" type="password" class="validate">
                <label for="senha">Senha</label>
              </div>
            </div>
            <div class="row">
              <div class="col s6">
                <a href="home.html" id="download-button" class="btn-large waves-effect waves-light blue darken-3">Entrar</a>
                <p>ou <a href="cadastro.html">Cadastre-se</a></p>
                <?php echo '<p>teste</p>'; ?>
              </div>
            </div>
            <br><br>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer blue darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">MyDropbox <i class="material-icons">system_update_alt</i></h5>
          <p class="grey-text text-lighten-4">Acesse todos os seus arquivos de qualquer lugar, em qualquer dispositivo, e compartilhe-os com qualquer pessoa.</p>


        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Contato</h5>
          <ul>
            <li><a class="white-text" href="#!">contato@mydropbox.com</a></li>
            <li><a class="white-text" href="#!">facebook/mydropbox</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>