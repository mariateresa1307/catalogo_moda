<?php

include("credenciales.php");

/*DEFINE LAS VARIABLES CONSTANTES  Y LE ASIGNAS EL VALOR*/

define("ENTORNO","DEV");




/*si el entorno de desarrollo es DEV MSTRARA LOS ERRORES en el navegador*/

if (ENTORNO == "DEV") {
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
}
?>
