<?php

/*
 * Jonnyalexbh
 * @Descripcion: clase para manejo de textos
 */

class text {

    public static function nameEquipo($data) {
        return ($data == 'Nal') ? 'NACIONAL' : 'MEDELLIN';
    }

    public static function saludo() {
        return "Hola mundo";
    }

}
