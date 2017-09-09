<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Aplikasi Persediaan Obat pada Apotek">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="DevTomhet"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- bootstrap 3.3.2 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <!-- Font Awesome Icons -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- iCheck -->
    <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="login-page bg-login">
    <div class="login-box">
      <div style="color:#3c8dbc" class="login-logo">
        <img style="margin-top:-12px" src="assets/img/logo-blue.png" alt="logo" height="50"> <b>MEDISYS</b>
      </div>
      <?php
        if (empty($_GET['alert'])) {
          echo "";
        }
        elseif ($_GET['alert'] == 1) {
          echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4>  <i class='icon fa fa-times-circle'></i> Error al entrar!</h4>
                Usuario o la contraseña es incorrecta, vuelva a verificar su nombre de usuario y contraseña.
                </div>";
        }

        elseif ($_GET['alert'] == 2) {
          echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
                  Has salido con éxito.
                </div>";
        }
      ?>

      <div class="login-box-body">
        <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Por favor Inicie Sesión</p>
        <br/>
        <form action="login-check.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <br/>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar" />
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
