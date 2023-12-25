<?php

class ControllerCustomers {

    public function ViewCustomersMain() {
        require_once 'view/Customers/MainCustomers.php';
    }

    public function ViewCustomersCategory() {
        require_once 'view/CustomersCategory/MainCustomersCategory.php';
    }
}
