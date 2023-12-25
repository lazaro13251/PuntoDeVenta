<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categorias</title>
        <?php include 'view/template/header.php'; ?>
    </head>
    <body>
        <?php
        include 'view/template/nav.php';
        require_once 'modell/DAO/ArticlesMeasureDAO.php';

        try {
            $articlesMeasureDAO = (new ArticlesMeasureDAO())->ReadAll();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="card border-dark mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="display-3">Control de medicion</h1>
                            <div class="gap-2 d-md-flex">
                                <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#form-articulos">
                                    Nuevo articulo
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-hover table-bordered">
                                <thead>
                                    <tr class="table-dark">
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($articlesMeasureDAO as $measure) : ?>
                                        <tr>
                                            <td> <?= $measure->getIdArticlesMeasure(); ?> </td>
                                            <td> <?= $measure->getNameArticlesMeasure(); ?> </td>
                                            <td>
                                                <div class="d-grid gap-2 d-md-flex justify-content-center">
                                                    <button class="btn btn-dark btn-sm" onclick="window.location.href = '?id=<?= $measure->getIdArticlesMeasure(); ?>'">EDITAR</button>
                                                    <button class="btn btn-danger btn-sm" onclick="eliminarArticulo(<?= $measure->getIdArticlesMeasure(); ?>)">ELIMINAR</button>
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
