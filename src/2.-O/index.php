<?php
    require "../../vendor/autoload.php";
    require "tienda.php";
    require "menu_error.php";

    /**
     * O - OCP
     * Open/closed principle ( Principio de abierto/cerrado).
     * La noción de que las "entidades (clases, métodos o funciones) de software... deben estar abiertas para su extensión, pero cerradas para su modificación".
     * Fuente: Código y Café
     *         https://www.youtube.com/watch?v=KxeUnivMNik
     * 
     * Alguna vez te ha pasado que tu jefe te pide cambiar alguna parte del sistema y cuando llegas y vez el código piensas "Creo que esto no va a ser nada fácil"
     * o te ha pasado que tienes un método tan enorme lleno de validaciones que te da miedo modificarlo y sin pruebas de unidad.
     * Usando el principio de abierto/cerrado podemos diseñar que nuestro código se adapte a nuevos cambios.
     * 
     * Este principio nos da a entender que, cuando nosotros programemos lo hagamos de tal forma que 
     * el código que estamos programando no volvamos a tocar otra vez...
     * Aun cuando queramos que esa clase, método o función haga algo totalmente diferente.
     * 
     * Debemos poder extender el comportamiento de una clase, método o función sin modificarla.
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
    echo $Menu->Ver( $Tienda->ObtenerProductos() , false );
    echo $Menu->Ver( $Tienda->ObtenerProductos() , true );
?>