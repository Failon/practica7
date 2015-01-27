<?php

require 'sys/core.php';

ini_set("display_errors","on");
define('DS',DIRECTORY_SEPARATOR); //Define el separador de directorios 
define('ROOT',realpath(dirname(__FILE__)).DS); //Define el directorio Raíz

define('APP',ROOT.'app'.DS); //Define el directorio de aplicacion
define('APP_W',basename($_SERVER['SCRIPT_NAME'])); //define el directorio de aplicacion web

core::start();