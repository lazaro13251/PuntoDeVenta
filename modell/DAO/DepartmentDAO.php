<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/Department.php';

class DepartmentDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("INSERT INTO {$this->table->getNombreTabla()} ($columns[0], $columns[1], $columns[2], $columns[3], $columns[4]) VALUES (NULL, ?, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stmt->bindValue(1, $object->getNameDepartment(), PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo '<pre>';
            print_r($exc->getMessage());
            echo '<pre>';
            return false;
        }
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
                $department = new Department(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                );
                $array[] = $department;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ReadByID(int $id): ?object {
        
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_department');
        $table->addCamposTabla('id_department');
        $table->addCamposTabla('column_name_department');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
