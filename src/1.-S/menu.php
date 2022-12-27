<?php
    namespace App;

    class Menu
    {
        public function Ver( array $Productos = [] ): string {
            $Menu  = "";
            $Menu .= "Id\tNombre\t\tPrecio\n";
            $Menu .= str_repeat( '=' , 30 ) . "\n";
            foreach ($Productos as $Producto) {
                $Menu .= $Producto['Id'] . "\t"
                      .  str_pad( $Producto['Nombre'] , 15 , ' ' ) . "\t"
                      .  $Producto['Precio'] . "\n";
            }
            return $Menu;
        }
    }
?>