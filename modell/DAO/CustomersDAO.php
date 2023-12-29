<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/Customers.php';

class CustomersDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        
    }

    public function DeleteByID(int $id): bool {
        
    }

    public function ReadAll(): array {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[8] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $customer = new Customers(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]],
                        $result[$columns[6]],
                        $result[$columns[7]],
                        $result[$columns[8]],
                        $result[$columns[9]],
                        $result[$columns[10]],
                );
                $array[] = $customer;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ReadByID(int $id): ?object {
        
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_customers');
        $table->addCamposTabla('id_customers');
        $table->addCamposTabla('column_name_customers');
        $table->addCamposTabla('column_paternal_customers');
        $table->addCamposTabla('column_maternal_customers');
        $table->addCamposTabla('column_mail_customers');
        $table->addCamposTabla('column_phone_customers');
        $table->addCamposTabla('column_birth_customers');
        $table->addCamposTabla('id_customers_category');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
