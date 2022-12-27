<?php
    require "../../vendor/autoload.php";
    require "tienda.php";
    require "menu.php";

    /**
     * S - SRP
     * Single responsibility principle (Principio de Responsabilidad Única).
     * La noción de que un objeto (clase) solo debería tener una única razón para cambiar.
     * Fuente: Código y Café
     *         https://www.youtube.com/watch?v=_8ecJbcIJKM
     * 
     * Nota
     * Ahora cada clase tiene su principio de responsabilidad única
     * Si el día de mañana nos piden imprimir el menú de una manera diferente, solo modificamos la clase Menu
     * sin afectar la clase Tienda y Carrito.
     * 
     * La próxima vez que veas una clase, observa bien los métodos y pregúntate.
     * ¿Esta clase tiene más de una razón para ser cambiada? Si es así, entonces...
     * Considera extraer sus métodos extras a una clase diferente.
     */

    use App\Tienda;
    use App\Menu;

    $Productos = [
        ['Id' => 1, 'Nombre' => 'Coca Cola', 'Precio' => 35],
        ['Id' => 2, 'Nombre' => 'Pepsi', 'Precio' => 30],
        ['Id' => 3, 'Nombre' => 'Fanta', 'Precio' => 20]
    ];

    $Tienda = new App\Tienda();
    $Tienda->AgregarProductos( $Productos );
    $Menu = new App\Menu();
    echo $Menu->Ver( $Tienda->ObtenerProductos() );
?>