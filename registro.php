<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es"> <!--<![endif]-->
<head>
    <title>Register</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Systamina">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sysstyle.css">

    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!--=== Header ===-->
<div class="navbar">
</div>
<!--=== End Header ===-->
    <div class="container">
    <!--=== Form ===-->
    <div class="row margin-bottom-30">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default well well-lg">
                <p class="">Paso 1 de 2</p>
                <div class="panel-padd">
                    <h1 class="margin-bottom-20 text-center">Registro Proveedor</h1>
                    <h2 class="margin-bottom-20 text-center">Datos de la Cuenta</h2>
                </div>
                <form action="" method="post" class="">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required aria-required="true" aria-describedby="Escribe tu correo electrónico" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                    <label>Contraseña</label>
                    <input type="password" name="passwd" class="form-control">
                    <label>Confirmar contraseña</label>
                    <input type="password" name="confpasswd" class="form-control">
                    <label></label>
                    <input type="submit" name="send" class="btn btn-lg btn-sys btn-block" value="Registrarme">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
</html>