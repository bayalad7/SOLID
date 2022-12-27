<?php
    namespace App;

    class Tienda
    {
        protected array $Productos = [];
        
        public function agregarProductos( $Productos = [] ){
            $this->Productos = $Productos;
        }

        public function obtenerProductos(): array {
            return $this->Productos;
        }

        public function eliminarProducto( $id ): void {
            // Lógica para borrar el producto
        }

        /**
         * NOTA IMPORTANTE.
         * Al leer los métodos de agregarProductoAlCarrito y obtenerTotalCarrito, esto nos da la indicación
         * que estos 2 métodos pertenecen a otra clase. Para esto lo mejor es crear la Clase Carrito...
         */
        public function agregarProductoAlCarrito( $id , $cantidad ): void {
            // Lógica para agregar el producto al carrito
        }
        public function obtenerTotalCarrito(): void {
            // Lógica para generar el total a pagar del carrito
        }

        public function verMenu(): string {
            $Menu  = "";
            $Menu .= "Id\tNombre\t\tPrecio\n";
            $Menu .= str_repeat( '=' , 30 ) . "\n";

            foreach ($this->Productos as $Producto) {
                $Menu .= $Producto['Id'] . "\t"
                      .  str_pad( $Producto['Nombre'] , 15 , ' ' ) . "\t"
                      .  $Producto['Precio'] . "\n";
            }
            return $Menu;
        }
    }
?>