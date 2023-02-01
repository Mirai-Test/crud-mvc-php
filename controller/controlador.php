<?php
    $opcion = $_GET['opcion'];

    switch ($opcion) {
        case 'ingresar':
            include "../view/ingreso_vista.php";
            break;
        case 'mostrar':
            include "../view/mostrar_vista.php";
            break;
        case "buscar":
            require_once "../view/buscar_vista.php";
            break;
    }
