<?php

    require_once __DIR__ . '/../DAO/ArticlesMeasureDAO.php';
    require_once __DIR__ . '/../Entitys/ArticlesMeasure.php';

    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'POST':
            $articlesCategoryDAO = new ArticlesMeasureDAO();
            $articlesCategoryDAO->Create(
                    new ArticlesMeasure(
                            null,
                            $_POST['input_name_measure'],
                            null,
                            null,
                            null
                    )
            );

            header('Location: ../../medicion.php');
            exit();
            break;
    }
