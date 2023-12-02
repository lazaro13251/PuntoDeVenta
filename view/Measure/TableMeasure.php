<?php
require_once 'modell/DAO/ArticlesCategoryDAO.php';

try {
    echo '<pre>';
    $categoryDAO = (new ArticlesCategoryDAO())->ReadAll();
    echo '</pre>';
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

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
                            <?php foreach ($categoryDAO as $category) : ?>
                                <tr>
                                    <td> <?php echo $category->getIdArticleCategory(); ?> </td>
                                    <td> <?php echo $category->getNameArticleCategory(); ?> </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                                            <button class="btn btn-dark btn-sm" onclick="window.location.href = '?id=<?php echo $category->getIdArticleCategory(); ?>'">EDITAR</button>
                                            <button class="btn btn-danger btn-sm" onclick="eliminarArticulo(<?php echo $category->getIdArticleCategory(); ?>)">ELIMINAR</button>
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