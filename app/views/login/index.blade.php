<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ HTML::style('favicon.ico') }}

    <title>Iniciar Sesión</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('css/signin.css') }}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo HTML::script('js/ie8-responsive-file-warning.js')?>
    <![endif]-->
    {{ HTML::script('js/ie-emulation-modes-warning.js') }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <!-- Mensaje -->
      <div class="alert alert-danger hidden" role="alert">¡Datos incorrectos!</div>
      <!-- Fin Mensaje -->
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading" style="text-align: center">
          <img src="img/enterprise.png">
        </h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="usuario" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="contraseña" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{ HTML::script('js/ie10-viewport-bug-workaround.js') }}
  </body>
</html>