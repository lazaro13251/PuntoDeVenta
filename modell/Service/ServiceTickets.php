<?php

require_once '../DAO/TickectDAO.php';
require_once '../Entitys/Tickets.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        $articlesDAO = new TickectDAO();

        $articlesDAO->Create(
                new Tickets(
                        null,
                        $_POST['input_ups'],
                        $_POST['input_name'],
                        $_POST['input_coste'],
                        $_POST['input_precio_venta'],
                        $_POST['input_categoria'],
                        $_POST['input_departamento'],
                        null,
                        $_POST['input_medida'],
                        $_POST['input_referencia_interna'],
                        $_POST['input_notas_internas'],
                        null,
                        null,
                        null
                )
        );

        header('Location: ../../tickets.php');
        exit();
        break;
}