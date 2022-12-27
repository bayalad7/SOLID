<?php
    namespace App;

    require "menu_salida_texto.php";
    require "menu_salida_json.php";

    interface MenuSalida
    {
        public function Salida( array $Productos = [] ): string|false;
    }
?>