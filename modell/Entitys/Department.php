<?php

class Department {

    private int $idDepartment;
    private string $nameDepartment;
    private int $activeDepartment;
    private DateTime $createdDepartment;
    private DateTime $updatedDepartment;

    public function __construct(int $idDepartment, string $nameDepartment, int $activeDepartment, DateTime $createdDepartment, DateTime $updatedDepartment) {
        $this->idDepartment = $idDepartment;
        $this->nameDepartment = $nameDepartment;
        $this->activeDepartment = $activeDepartment;
        $this->createdDepartment = $createdDepartment;
        $this->updatedDepartment = $updatedDepartment;
    }

    public function getIdDepartment(): int {
        return $this->idDepartment;
    }

    public function getNameDepartment(): string {
        return $this->nameDepartment;
    }

    public function getActiveDepartment(): int {
        return $this->activeDepartment;
    }

    public function getCreatedDepartment(): DateTime {
        return $this->createdDepartment;
    }

    public function getUpdatedDepartment(): DateTime {
        return $this->updatedDepartment;
    }

    public function setIdDepartment(int $idDepartment): void {
        $this->idDepartment = $idDepartment;
    }

    public function setNameDepartment(string $nameDepartment): void {
        $this->nameDepartment = $nameDepartment;
    }

    public function setActiveDepartment(int $activeDepartment): void {
        $this->activeDepartment = $activeDepartment;
    }

    public function setCreatedDepartment(DateTime $createdDepartment): void {
        $this->createdDepartment = $createdDepartment;
    }

    public function setUpdatedDepartment(DateTime $updatedDepartment): void {
        $this->updatedDepartment = $updatedDepartment;
    }
}
