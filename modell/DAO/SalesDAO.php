<?php

require 'modell/General/IMethods.php';
require 'modell/Entitys/Sales.php';

class SalesDAO implements IMethods {

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
        $table = new Tables('table_sales');
        $table->addCamposTabla('id_sales');
        $table->addCamposTabla('id_customers');
        $table->addCamposTabla('colum_total_sales');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
