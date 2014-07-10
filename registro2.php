<?php
session_start();
require_once "config.php"; //conecta el archivo config - base de datos

/**
* Traemos los datos guardados en sesion del registro.php y comprobamos que nos muestra los datos en navegador
*  echo $_SESSION['email'].'<br>';
*echo $_SESSION['passwd'].'<br>';
**/

//Seteamos send para llamar a la funcion validarRegistroF
if(isset($_POST['send'])){
    validarRegistroF();
}

function validarRegistroF(){
    global $connect;

    //Verificamos no campos vacios
    if($_POST['company'] == '' or
       $_POST['cif'] == '' or
       $_POST['phone'] == '' or
       $_POST['name'] =='' or
       $_POST['lastname'] == '' or
       $_POST['cp'] == ''){

        echo "Por favor complete todos los campos";
        return;
    }

    //Comprobar si el cif existe en base de datos
    $sql = "SELECT count(*) FROM proveedores WHERE cif='" .$_POST['cif']. "'";
    $rec = mysqli_query($connect, $sql);
    $result = mysqli_fetch_array($rec);

    if($result[0] > 0){
         echo "Este cif ya está registrado";
       return;
    }

    //Si supera todas nuestras comprobaciones, guardamos los datos de forma segura
    $email = mysqli_real_escape_string($connect, $_SESSION['email']);
    $passwd = mysqli_real_escape_string($connect, $_SESSION['passwd']);
    $company = mysqli_real_escape_string($connect, $_POST['company']);
    $cif = mysqli_real_escape_string($connect, $_POST['cif']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
    $cp = mysqli_real_escape_string($connect, $_POST['cp']);

    // Hacemos el Insert en la base de datos
    $sql = "INSERT INTO proveedores (email, passwd, company, cif, phone, name, lastname, cp, alta)
                              VALUES('$email', '$passwd', '$company', '$cif', '$phone', '$name', '$lastname', '$cp', NOW())";
    $rec = mysqli_query($connect, $sql);

    //echo $sql; Para comprobar que datos se estan enviando a la base

    //Una vez comprobado ya no es util xq ya existe redireccionamiento desde action ="confirm.php"
    //echo 'Usted se ha registrado correctamente.';


}

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es"> <!--<![endif]-->
<head>
    <title>Registro Paso 2 de 2</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Systamina">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sysstyle.css">

    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- CSS Implementing Plugins -->

    <!-- CSS Page Style -->

    <!-- CSS Theme -->

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
                <p class="">Paso 2 de 2</p>
                <div class="panel-body">
                    <h1 class="margin-bottom-20 text-center">Registro Proveedor</h1>
                    <h2 class="margin-bottom-20 text-center">Datos de Empresa</h2>
                    <form action="confirm.php" method="post" class="">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Empresa</label>
                                <input type="text" name="company" class="form-control" required>
                                <label>CIF</label>
                                <input type="text" name="cif" class="form-control" required>
                                <label>Teléfono</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control" required>
                                <label>Apellido</label>
                                <input type="text" name="lastname" class="form-control" required>
                                <label>Código Postal</label>
                                <input type="text" name="cp" class="form-control" required>
                            </div>
                        </div>
                        <label></label>
                        <input type="submit" name="send"class="btn btn-lg btn-sys btn-block" value="Completar Registro">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!--=== Form ===-->
<!--=== JS Global Compulsory ===-->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




