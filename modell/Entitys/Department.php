<?php

class Department {

    private $idDepartment;
    private $nameDepartment;
    private $activeDepartment;
    private $createdDepartment;
    private $updatedDepartment;

    public function __construct($idDepartment, $nameDepartment, $activeDepartment, $createdDepartment, $updatedDepartment) {
        $this->idDepartment = $idDepartment;
        $this->nameDepartment = $nameDepartment;
        $this->activeDepartment = $activeDepartment;
        $this->createdDepartment = $createdDepartment;
        $this->updatedDepartment = $updatedDepartment;
    }

    public function getIdDepartment() {
        return $this->idDepartment;
    }

    public function getNameDepartment() {
        return $this->nameDepartment;
    }

    public function getActiveDepartment() {
        return $this->activeDepartment;
    }

    public function getCreatedDepartment() {
        return $this->createdDepartment;
    }

    public function getUpdatedDepartment() {
        return $this->updatedDepartment;
    }

    public function setIdDepartment($idDepartment): void {
        $this->idDepartment = $idDepartment;
    }

    public function setNameDepartment($nameDepartment): void {
        $this->nameDepartment = $nameDepartment;
    }

    public function setActiveDepartment($activeDepartment): void {
        $this->activeDepartment = $activeDepartment;
    }

    public function setCreatedDepartment($createdDepartment): void {
        $this->createdDepartment = $createdDepartment;
    }

    public function setUpdatedDepartment($updatedDepartment): void {
        $this->updatedDepartment = $updatedDepartment;
    }
}
