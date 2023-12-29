<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/Users.php';

class UsersDAO implements IMethods {

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
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[4] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $user = new Users(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]],
                        $result[$columns[6]]
                );
                $array[] = $user;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo '<pre>';
            var_dump($exc->getTraceAsString());
            echo '</pre>';
        }
    }

    public function ReadByID(int $id): ?object {
        
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_users');
        $table->addCamposTabla('id_user');
        $table->addCamposTabla('column_name_user');
        $table->addCamposTabla('column_password_user');
        $table->addCamposTabla('id_user_roll');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
