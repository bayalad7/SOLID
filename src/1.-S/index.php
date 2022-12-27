<?php
    require "../../vendor/autoload.php";
    require "tienda_error.php";

    /**
     * S - SRP
     * Single responsibility principle (Principio de Responsabilidad Única).
     * La noción de que un objeto (clase) solo debería tener una única razón para cambiar.
     * Fuente: Código y Café
     *         https://www.youtube.com/watch?v=_8ecJbcIJKM
     */

    use App\Tienda;

    $Productos = [
        ['Id' => 1, 'Nombre' => 'Coca Cola', 'Precio' => 35],
        ['Id' => 2, 'Nombre' => 'Pepsi', 'Precio' => 30],
        ['Id' => 3, 'Nombre' => 'Fanta', 'Precio' => 20]
    ];

    $Tienda = new Tienda();
    $Tienda->agregarProductos( $Productos );
    echo $Tienda->verMenu();
?>