<?php
    namespace App;

    require "menu_salida.php";

    class Menu
    {
        public function Ver( array $Productos = [] , MenuSalida $Salida ): string|false {
            return $Salida->Salida( $Productos );
        }
    }
?>