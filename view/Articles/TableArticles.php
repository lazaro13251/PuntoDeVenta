<?php
require_once 'modell/DAO/ArticlesDAO.php';

try {
    $articlesDAO = (new ArticlesDAO())->ReadAll();
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
                    <h1 class="display-3">Control de Articulos</h1>
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
                                <th>UPS</th>
                                <th>Articulo</th>
                                <th>Costo</th>
                                <th>Venta</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articlesDAO as $article) : ?>
                                <tr>
                                    <td> <?php echo $article->getUpsArticle(); ?> </td>
                                    <td> <?php echo $article->getNameArticle(); ?> </td>
                                    <td> <?php echo $article->getCosteArticle(); ?> </td>
                                    <td> <?php echo $article->getSaleArticle(); ?> </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                                            <button class="btn btn-dark btn-sm" onclick="window.location.href = '?id=<?php echo $article->getIdArticle(); ?>'">EDITAR</button>
                                            <button class="btn btn-danger btn-sm" onclick="eliminarArticulo(<?php echo $article->getIdArticle(); ?>)">ELIMINAR</button>
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

<script>
    function eliminarArticulo(id) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este artículo?");
        if (confirmacion) {
            fetch('tu_script_eliminar.php?id=' + id)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert("Artículo eliminado exitosamente");
                        } else {
                            alert("No se pudo eliminar el artículo");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
        }
    }
</script>