<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/UsersRolls.php';

class UsersRollsDAO implements IMethods {

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
        $table = new Tables('table_users_rolls');
        $table->addCamposTabla('id_user_roll');
        $table->addCamposTabla('column_name_user_roll');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }
}
