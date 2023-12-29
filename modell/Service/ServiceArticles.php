<?php

require_once '../DAO/ArticlesDAO.php';
require_once '../Entitys/Articles.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        $articlesDAO = new ArticlesDAO();

        $articlesDAO->Create(
                new Articles(
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

        header('Location: ../../articulos.php');
        exit();
        break;
}
