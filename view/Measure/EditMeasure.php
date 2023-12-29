<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar medicion</title>
        <?php include 'view/template/header.php'; ?>
    </head>
    <body>
        <?php
        require_once __DIR__ . '/../../modell/DAO/ArticlesMeasureDAO.php';

        try {
            $articlesMeasureDAO = new ArticlesMeasureDAO();
            $measure = $articlesMeasureDAO->ReadByID($_GET['id']);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        include 'view/template/nav.php';
        ?>
        <br>
        <div class="jumbotron">
            <div class="container">
                <div class="card border-dark mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title"><?= $measure->getNameArticlesMeasure(); ?></h4>
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href = 'medicion.php'">
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
                            <div class="col">
                                <label for="input_article_measure" class="form-label">Nombre de la medida:</label>
                                <input type="text" class="form-control border border-3" aria-label="Categoria de articulo" name="input_article_measure" id="input_article_measure" required autofocus value="<?= $measure->getNameArticlesMeasure(); ?>">
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'view/template/footer.php'; ?>
</body>    
</html>
