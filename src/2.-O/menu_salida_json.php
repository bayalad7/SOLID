<?php
    namespace App;

    class MenuSalidaJson implements MenuSalida
    {
        public function Salida( array $Productos = [] ): string|false
        {
            return json_encode( $Productos );
        }
    }
?>