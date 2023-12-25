<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de Clientes</title>
        <?php include 'view/template/header.php'; ?>
    </head>
    <body>
        <?php
        include 'view/template/nav.php';
        require_once 'modell/DAO/CustomersCategoryDAO.php';

        try {
            $customerscategoryDAO = (new CustomersCategoryDAO)->ReadAll();
        } catch (Exception $e) {
            echo '<pre>';
            var_dump("Error: " . $e->getMessage());
            echo '</pre>';
        }
        ?>

        <br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="card border-dark mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="display-3">Control de categoria clientes</h1>
                            <div class="gap-2 d-md-flex">
                                <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#form-new-article">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-hover table-bordered">
                                <thead>
                                    <tr class="table-dark">
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Creado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($customerscategoryDAO as $category) : ?>
                                    <td> 
                                        <p class="fw-normal mb-1"><?= $category->getIdCustomersCategory(); ?></p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1"><?= $category->getNameCustomersCategory(); ?></p>
                                    </td>
                                    <td> 
                                        <p class="fw-normal mb-1"><?= $category->getCreatedCustomersCategory(); ?></p>
                                    </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                                            <button class="btn btn-dark btn-sm" onclick="window.location.href = 'editar-articulo.php?id=<?= $category->getIdCustomersCategory(); ?>'">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-danger btn-sm" onclick="eliminarArticulo(<?= $category->getIdCustomersCategory(); ?>)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'view/template/footer.php'; ?>
    </body>    
</html>
