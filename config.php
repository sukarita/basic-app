<?php

// datos para la coneccion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','YOUR_BD');
define('DB_USER','YOUR_USER');
define('DB_PASS','YOUR_PASS');

$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME); //abrir una conexion al servidor de MySQL




