<?php

require_once '../DAO/ArticlesDAO.php';
require_once '../Entitys/Articles.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            switch ($action) {
                case 'create':
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
                case 'update':
                    if (isset($_POST['article_id'])) {
                        echo '<pre>';
                        print_r($_POST);
                        echo '</pre>';

                        $articlesDAO = new ArticlesDAO();
                        $articlesDAO->UpdateByID(
                                $_POST['article_id'],
                                new Articles(
                                        $_POST['article_id'],
                                        $_POST['input_ups'],
                                        $_POST['input_nombre'],
                                        $_POST['input_precio_costo'],
                                        $_POST['input_precio_venta'],
                                        $_POST['input_categoria'],
                                        $_POST['input_departamento'],
                                        null,
                                        $_POST['input_especialidad'],
                                        $_POST['input_referencia_interna'],
                                        $_POST['input_notas_internas'],
                                        null,
                                        null,
                                        null
                                )
                        );
                        header('Location: ../../articulos.php');
                        exit();
                    }
                    break;

                case 'delete':
                    if (isset($_POST['article_id'])) {
                        $articleId = $_POST['article_id'];
                        $articlesDAO = new ArticlesDAO();
                        $articlesDAO->DeleteByID($articleId);
                        header('Location: ../../articulos.php');
                        exit();
                    }
                    break;
            }
        }
        break;
}

