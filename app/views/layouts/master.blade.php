<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo HTML::style('favicon.ico');?>

    <title>@yield("title")</title>
    <?php echo HTML::style('css/bootstrap.min.css');?>
    <?php echo HTML::style('css/dashboard.css');?>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <?php echo HTML::script('js/ie-emulation-modes-warning.js');?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @include('layouts.nav')

    <div class="container-fluid">
      <div class="row">
        @include('layouts.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">@yield("title page")</h1>
          @yield("content")
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php echo HTML::script('js/bootstrap.min.js');?>
    <?php echo HTML::script('js/docs.min.js');?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo HTML::script('js/ie10-viewport-bug-workaround.js');?>
  </body>
</html>
