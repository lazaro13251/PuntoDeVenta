<?php

require_once __DIR__ . '/../DAO/DepartmentDAO.php';
require_once __DIR__ . '/../Entitys/Department.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        $departmentDAO = new DepartmentDAO();
        $departmentDAO->Create(
                new Department(
                        null,
                        $_POST['input_name_department'],
                        null,
                        null,
                        null
                )
        );

        header('Location: ../../departamento.php');
        exit();
        break;
}
