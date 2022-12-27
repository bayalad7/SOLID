<?php
    namespace App;

    class Menu
    {
        /**
         * El método ver de la clase Menu nos imprime el menú en formato texto...
         * Ahora imagina la situación de que te piden ver el menú en formato json.
         * Seguramente lo más fácil seria meter una bandera que nos indique si va a ser en formato json o formato texto
         * Ejemplo:
         */
        public function Ver( array $Productos = [] , bool $json = false ): string {
            $Menu = "";

            if( $json )
            {
                $Menu = json_encode( $Productos );
            }
            else
            {
                $Menu .= "Id\tNombre\t\tPrecio\n";
                $Menu .= str_repeat( '=' , 30 ) . "\n";
                foreach ($Productos as $Producto) {
                    $Menu .= $Producto['Id'] . "\t"
                          .  str_pad( $Producto['Nombre'] , 15 , ' ' ) . "\t"
                          .  $Producto['Precio'] . "\n";
                }
            }
            /**
             * Pero al realizar esto ya violamos este principo por que tuvimos que modificar el código original
             * Tal vez no es la gran cosa, pero... ¿Y si te piden agregar otro formato de vista como html, etc...?
             * 
             * No podemos predecir el futuro, pero podemos prepararnos para el...
             */

            return $Menu;
        }
    }
?>