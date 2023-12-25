<?php

require 'modell/General/IMethods.php';
require 'modell/Entitys/Users.php';

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
