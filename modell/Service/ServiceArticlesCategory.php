<?php

require_once __DIR__ . '/../DAO/ArticlesCategoryDAO.php';
require_once __DIR__ . '/../Entitys/ArticlesCategory.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        $articlesCategoryDAO = new ArticlesCategoryDAO();
        $articlesCategoryDAO->Create(
                new ArticlesCategory(
                        null,
                        $_POST['input_name_category'],
                        null,
                        null,
                        null
                )
        );

        header('Location: ../../articulos-categoria.php');
        exit();
        break;
}
