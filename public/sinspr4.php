<?php

/*
 * Jonnyalexbh
 * @Descripcion: en este ejemplo no hacemos uso del sistema PSR4
 */

require_once '../app/classes/date.php';
echo 'Fecha actual:  ' . date::fechaActual() . '</br>';


require_once '../app/classes/text.php';
echo 'Equipo favorito:   ' . text::nameEquipo('Nal') . '</br>';
echo text::saludo() . '</br>';

require_once '../app/page.php';
$page1 = new Page();
