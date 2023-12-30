<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar articulo</title>
        <?php include 'view/template/header.php'; ?>
    </head>
    <body>
        <?php
        require_once 'modell/DAO/ArticlesDAO.php';
        require_once 'modell/DAO/ArticlesCategoryDAO.php';
        require_once 'modell/DAO/DepartmentDAO.php';
        require_once 'modell/DAO/ArticlesMeasureDAO.php';

        try {
            $article = (new ArticlesDAO())->ReadByID($_GET['id']);
            $articlesCategoryDAO = (new ArticlesCategoryDAO)->ReadAll();
            $departmentDAO = (new DepartmentDAO)->ReadAll();
            $articlesMeasureDAO = (new ArticlesMeasureDAO())->ReadAll();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        include 'view/template/nav.php';
        ?>
        <br>
        <div class="jumbotron">
            <div class="container">
                <form action="modell/Service/ServiceArticles.php" method="POST">
                    <div class="card border-dark mb-3">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title"><?= $article->getNameArticle(); ?></h4>
                                <div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href = 'articulos.php'">
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
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="article_id" value="<?= $article->getIdArticle(); ?>">
                                <div class="col">
                                    <label for="input_ups" class="form-label">UPS:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre" name="input_ups" id="input_ups" required autofocus value="<?= $article->getUpsArticle(); ?>">
                                </div>
                                <div class="col">
                                    <label for="input_nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Apellido paterno" name="input_nombre" id="input_nombre" required value="<?= $article->getNameArticle(); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_precio_costo" class="form-label">Precio costo:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre" name="input_precio_costo" id="input_precio_costo" required value="<?= $article->getCosteArticle(); ?>">
                                </div>
                                <div class="col">
                                    <label for="input_precio_venta" class="form-label">Precio Venta:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Apellido paterno" name="input_precio_venta" id="input_precio_venta" required value="<?= $article->getSaleArticle(); ?>">
                                </div>
                                <div class="col">
                                    <label for="input_referencia_interna" class="form-label">Referencia interna:</label>
                                    <input type="text" class="form-control border border-3" aria-label="Nombre" name="input_referencia_interna" id="input_referencia_interna" required value="<?= $article->getInternalReferenceArticle(); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_categoria" class="form-label">Categoria:</label>
                                    <select class="form-select border border-3" aria-label="Especialidad" name="input_categoria" id="input_categoria" required>
                                        <option selected disabled value="">Abre este menú para seleccionar una categoria</option>
                                        <?php foreach ($articlesCategoryDAO as $category) : ?>
                                            <?php $selected = ($category->getIdArticleCategory() == $article->getCategoryArticle()) ? 'selected' : ''; ?>
                                            <option value="<?= $category->getIdArticleCategory(); ?>" <?= $selected; ?>>
                                                <?= $category->getNameArticleCategory(); ?>
                                            </option>
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
                                            <?php $selected = ($department->getIdDepartment() == $article->getDepartmentArticle()) ? 'selected' : ''; ?>
                                            <option value="<?= $department->getIdDepartment(); ?>" <?= $selected; ?>>
                                                <?= $department->getNameDepartment(); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_especialidad" class="form-label">Medida:</label>
                                    <select class="form-select border border-3" aria-label="Especialidad" name="input_especialidad" id="input_especialidad" required>
                                        <option selected disabled value="">Abre este menú para seleccionar una medida</option>
                                        <?php foreach ($articlesMeasureDAO as $measure) : ?>
                                            <?php $selected = ($measure->getIdArticlesMeasure() == $article->getMeasureArticle()) ? 'selected' : ''; ?>
                                            <option value="<?= $measure->getIdArticlesMeasure(); ?>" <?= $selected; ?>>
                                                <?= $measure->getNameArticlesMeasure(); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="input_notas_internas">Notas internas:</label>
                                    <textarea class="form-control border border-3" placeholder="Ingrese sus notas" id="input_notas_internas" name="input_notas_internas" style="height: 100px">
                                        <?= $article->getInternalNotesArticle(); ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'view/template/footer.php'; ?>
</body>    
</html>
