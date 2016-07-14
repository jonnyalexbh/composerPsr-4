<?php

/*
 * Jonnyalexbh
 * @Descripcion: PSR-4 es el nuevo estándar de carga automática en PHP, y nos obliga a utilizar los espacios
 *  de nombres, La carga automática nos permite utilizar clases PHP sin necesidad de require () o include ()
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR); // constante ROOT almacena la ruta del proyecto
require ROOT . 'vendor/autoload.php';   // incluimos el autoload de composer

use App\page_psr4;
use App\classes\date_psr4 as date;
use App\classes\text_psr4 as text;

echo 'Fecha actual:  ' . date::fechaActual() . '</br>';
echo 'Equipo favorito:   ' . text::nameEquipo('Nal') . '</br>';
echo text::saludo() . '</br>';
// $page1 = new page_psr4();

$dato = 'App\page_psr4';
$page1 = new $dato();
