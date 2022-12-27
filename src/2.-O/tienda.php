<?php
    namespace App;

    class Tienda
    {
        protected array $Productos = [];
        
        public function AgregarProductos( array $Productos = [] ){
            $this->Productos = $Productos;
        }

        public function ObtenerProductos(): array {
            return $this->Productos;
        }

        public function EliminarProducto( $id ): void {
            // Lógica para borrar el producto
        }
    }
?>