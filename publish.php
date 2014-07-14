<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es"> <!--<![endif]-->
<head>
    <title>Publicar Nueva Oferta</title>

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
<!--=== Navbar ===-->
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Basic-APP</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a href="#sec">Tu Cuenta</a>
                </li>
                <li>
                    <a href="logout.php">Salir</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!--=== /End Navbar ===-->

<div class="container">
    <div class="row">
        <!--=== Sidebar ===-->
        <div class="col-md-2">
            <ul class="nav nav-stacked" id="sidebar">
                <li><h2>Menú Principal</h2></li>
                <li><a href="welcome.php">Inicio</a></li>
                <li class="active"><a href="publish.php">Publicar</a></li>
                <li><a href="edit.php">Modificar</a></li>
                <li><a href="contact-us.php">Contáctanos</a></li>

            </ul>
        </div>
        <!--=== /Sidebar ===-->
        <!--=== Main Area ===-->
        <div class="col-md-10 main">
            <h1 id="sec0">Publica una Nueva Oferta</h1>
            <p>Publica tus nuevas ofertas y deja que los usuarios te descubran.</p>
            <hr>
        </div>
    </div>
    <!--=== /End Row ===-->
</div>
<!--=== /End Container ===-->
<!--=== JS Global Compulsory ===-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!--=== JS Plugins ===-->
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/systamina.js"></script>
</body>
</html>