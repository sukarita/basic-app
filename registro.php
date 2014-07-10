<?php

session_start();
require_once "config.php";//conecta con config.php


if(isset($_POST['send'])){
    validarRegistro();
}

function validarRegistro(){
    global $connect;

    if ($_POST['email'] == '' or
        $_POST['passwd'] == '' or
        $_POST['confpasswd'] == '')
    {
        echo "Por favor complete todos los campos";
        return;
    }

    //Comprobar si el email existe en base de datos
    $sql = "SELECT count(*) FROM proveedores WHERE email='" .$_POST['email']. " ' ";
    $rec = mysqli_query($connect, $sql);
    $result = mysqli_fetch_array($rec);

    if ($result[0]>0){
        echo "Correo ya existe, prueba otro";
        return;
    }

    // passwd = confpassword
    if ($_POST['passwd'] != $_POST['confpasswd']){
        echo 'Las claves no son iguales, intente nuevamente.';
        return;
    }

    //Si todo esta correcto guarda datos en session
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $_SESSION['email']=$email;
    $_SESSION['passwd']=$passwd;

    header("Location: /registro2.php");

}
?>


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