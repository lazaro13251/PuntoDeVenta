<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['input_ups_article']) {
    include_once 'controller/dbcon.php';

    $ups = $_POST['input_ups_article'];
    $nombre_articulo = $_POST['input_name_article'];
    $costo_articulo = $_POST['input_price_coste_article'];
    $venta_articulo = $_POST['input_price_sale_article'];
    $statement = $conexion->prepare(
        "INSERT INTO
            table_articles(
                id_article,
                column_ups_article,
                column_name_article,
                column_price_coste_article,
                column_price_sale_article,
                id_article_category,
                id_department,
                column_route_image_article,
                id_articles_measure,
                column_Internal_reference_article,
                column_internal_notes_article,
                active,
                created,
                updated
            )
        VALUES
            (
                NULL,
                :UPS_ARTICULO,
                :NOMBRE_ARTICULO,
                :COSTO_ARTICULO,
                :VENTA_ARTICULO,
                :CATEGORIA_ARTICULO,
                :DEPARTAMENTO_ARTICULO,
                :IMAGEN_ARTICULO,
                :MEDIDA_ARTICULO,
                :REFERENCIA_ARTICULO,
                :NOTA_ARTICULO,
                1,
                CURRENT_TIMESTAMP,
                NULL
            )"
    );

    $statement->execute(array(
        ':UPS_ARTICULO' => $ups,
        ':NOMBRE_ARTICULO',
        ':COSTO_ARTICULO',
        ':VENTA_ARTICULO',
        ':CATEGORIA_ARTICULO',
        ':DEPARTAMENTO_ARTICULO',
        ':IMAGEN_ARTICULO',
        ':MEDIDA_ARTICULO',
        ':REFERENCIA_ARTICULO',
        ':NOTA_ARTICULO'
    ));

    echo '<pre>';
    var_dump($statement->queryString);
    echo '</pre>';
}
