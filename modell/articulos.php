<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de articulos</title>
        <?php include 'view/template/header.php'; ?>
    </head>
    <body>
        <?php
        include 'view/template/nav.php';
        require '../modell/DAO/ArticlesDAO.php';
        $miarticulo = ArticlesDAO::ReadByID(2);
        echo '<pre>';
        echo var_dump($miarticulo);
        echo '</pre>';
        ?>



        <?php include 'view/template/footer.php'; ?>
    </body>    
</html>
