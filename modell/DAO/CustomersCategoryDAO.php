<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/CustomersCategory.php';

class CustomersCategoryDAO implements IMethods {

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
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[2] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $customer = new CustomersCategory(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                );
                $array[] = $customer;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo '<pre>';
            throw new Exception($ex->getMessage());
            echo '</pre>';
        }
    }

    public function ReadByID(int $id): ?object {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[2] = 1 AND $columns[0] = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new CustomersCategory(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]]
                );
            } else {
                throw new Exception(" La categoría de cliente con ID $id no fue encontrado");
            }
        } catch (Exception $ex) {
            echo '<pre>';
            throw new Exception($ex->getMessage());
            echo '</pre>';
        }
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_customers_category');
        $table->addCamposTabla('id_customers_category');
        $table->addCamposTabla('column_name_category');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
