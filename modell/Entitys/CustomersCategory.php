<?php

class CustomersCategory {

    public $idCustomersCategory;
    public $nameCustomersCategory;
    public $activeCustomersCategory;
    public $createdCustomersCategory;
    public $updatedCustomersCategory;

    public function __construct($idCustomersCategory, $nameCustomersCategory, $activeCustomersCategory, $createdCustomersCategory, $updatedCustomersCategory) {
        $this->idCustomersCategory = $idCustomersCategory;
        $this->nameCustomersCategory = $nameCustomersCategory;
        $this->activeCustomersCategory = $activeCustomersCategory;
        $this->createdCustomersCategory = $createdCustomersCategory;
        $this->updatedCustomersCategory = $updatedCustomersCategory;
    }

    public function getIdCustomersCategory() {
        return $this->idCustomersCategory;
    }

    public function getNameCustomersCategory() {
        return $this->nameCustomersCategory;
    }

    public function getActiveCustomersCategory() {
        return $this->activeCustomersCategory;
    }

    public function getCreatedCustomersCategory() {
        return $this->createdCustomersCategory;
    }

    public function getUpdatedCustomersCategory() {
        return $this->updatedCustomersCategory;
    }

    public function setIdCustomersCategory($idCustomersCategory): void {
        $this->idCustomersCategory = $idCustomersCategory;
    }

    public function setNameCustomersCategory($nameCustomersCategory): void {
        $this->nameCustomersCategory = $nameCustomersCategory;
    }

    public function setActiveCustomersCategory($activeCustomersCategory): void {
        $this->activeCustomersCategory = $activeCustomersCategory;
    }

    public function setCreatedCustomersCategory($createdCustomersCategory): void {
        $this->createdCustomersCategory = $createdCustomersCategory;
    }

    public function setUpdatedCustomersCategory($updatedCustomersCategory): void {
        $this->updatedCustomersCategory = $updatedCustomersCategory;
    }
}
