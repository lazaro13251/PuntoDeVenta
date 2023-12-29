<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/SalesDetail.php';

class SalesDetailDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        
    }

    public function DeleteByID(int $id): bool {
        
    }

    public function ReadAll(): array {
        
    }

    public function ReadByID(int $id): ?object {
        
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_sales_detail');
        $table->addCamposTabla('id_sales_detail');
        $table->addCamposTabla('id_sales');
        $table->addCamposTabla('id_article');
        $table->addCamposTabla('colum_number_article');
        $table->addCamposTabla('colum_subtotal_sales');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
