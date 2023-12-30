<?php
require_once 'modell/DAO/ArticlesDAO.php';
require_once 'modell/DAO/ArticlesCategoryDAO.php';
require_once 'modell/DAO/DepartmentDAO.php';
require_once 'modell/DAO/ArticlesMeasureDAO.php';

try {
    $articlesDAO = (new ArticlesDAO())->ReadAll();
    $articlesCategoryDAO = (new ArticlesCategoryDAO)->ReadAll();
    $departmentDAO = (new DepartmentDAO)->ReadAll();
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
                        <h1 class="display-3">Control de Articulos</h1>
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
                                                <button class="btn btn-dark btn-sm" onclick="window.location.href = 'editar-articulo.php?id=<?php echo $article->getIdArticle(); ?>'">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </button>
                                                <form action="modell/Service/ServiceArticles.php" method="POST">
                                                    <input type="hidden" name="action" value="delete">
                                                    <input type="hidden" name="article_id" value="<?php echo $article->getIdArticle(); ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                        </svg>
                                                    </button>
                                                </form>
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

    <!-- Modal -->
    <div class="modal fade" id="form-new-article" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="staticBackdropLabel">Nuevo articulo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="modell/Service/ServiceArticles.php" method="POST">
                        <input type="hidden" name="action" value="create">
                            <div class="row">
                                <div class="col">
                                    <label for="input_ups" class="form-label">UPS:</label>
                                    <input type="text" class="form-control border border-3" aria-label="UPS" name="input_ups" id="input_ups" required>
                                </div>
                                <div class="col">
                                    <label for="input_name" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre del articulo" name="input_name" id="input_name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_coste" class="form-label">Precio costo:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre" name="input_coste" id="input_coste" required>
                                </div>
                                <div class="col">
                                    <label for="input_precio_venta" class="form-label">Precio Venta:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Apellido paterno" name="input_precio_venta" id="input_precio_venta" required>
                                </div>
                                <div class="col">
                                    <label for="input_referencia_interna" class="form-label">Referencia interna:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre" name="input_referencia_interna" id="input_referencia_interna" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_categoria" class="form-label">Categoria:</label>
                                    <select class="form-select border border-3" aria-label="Especialidad" name="input_categoria" id="input_categoria" required>
                                        <option selected disabled value="">Abre este menú para seleccionar una categoria</option>
                                        <?php foreach ($articlesCategoryDAO as $category) : ?>
                                            <option value="<?= $category->getIdArticleCategory(); ?>"><?= $category->getNameArticleCategory(); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_departamento" class="form-label">Departamento:</label>
                                    <select class="form-select border border-3" aria-label="Departamento" name="input_departamento" id="input_departamento" required>
                                        <option selected disabled value="">Abre este menú para seleccionar un departamento</option>
                                        <?php foreach ($departmentDAO as $department) : ?>
                                            <option value="<?= $department->getIdDepartment(); ?>"><?= $department->getNameDepartment(); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_medida" class="form-label">Medida:</label>
                                    <select class="form-select border border-3" aria-label="Especialidad" name="input_medida" id="input_medida" required>
                                        <option selected disabled value="">Abre este menú para seleccionar una medida</option>
                                        <?php foreach ($articlesMeasureDAO as $measure) : ?>
                                            <option value="<?= $measure->getIdArticlesMeasure(); ?>"><?= $measure->getNameArticlesMeasure(); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_notas_internas">Notas internas:</label>
                                    <textarea class="form-control border border-3" placeholder="Ingrese sus notas" id="input_notas_internas" name="input_notas_internas" style="height: 100px"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                </button>
                                <button type="submit" class="btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
                                        <path d="M12 2h-2v3h2z"/>
                                        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
                                    </svg>
                                </button>
                                </form>
                            
                    </div>
            </div>
        </div>
    </div>