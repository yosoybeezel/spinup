<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Spin Up</title>
</head>

<body class="main">
    <div class="container">
        <div class="login-box col-md-4 ">
            <div class="login-logo">
                <img src="img/logo.png" alt="Spin Up">
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Inicio de sesi&oacuten</p>
                <form action="include/php/login.php" method="post" accept-charset="utf-8">
                    <div class="form-group has-feedback">
                        <input type="text" name="correo" placeholder="Usuario" class="form-control">
                        <span class="glyphicon glyphicon-user   form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="submit" name="login" href="include/home.php" value="Ingresar" class="btn btn-primary btn-block btn-flat col-sm-3">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
