<?php

namespace App\classes;

/*
 * Jonnyalexbh
 * @Descripcion: clase para manejo de textos usamos PSR4
 */

class text_psr4 {

    public static function nameEquipo($data) {
        return ($data == 'Nal') ? 'NACIONAL' : 'MEDELLIN';
    }

    public static function saludo() {
        return "Hola mundo";
    }

}
