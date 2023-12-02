<?php

class CustomersCategory {

    private int $idCustomersCategory;
    private string $nameCustomersCategory;
    private int $activeCustomersCategory;
    private DateTime $createdCustomersCategory;
    private DateTime $updatedCustomersCategory;

    public function __construct(int $idCustomersCategory, string $nameCustomersCategory, int $activeCustomersCategory, DateTime $createdCustomersCategory, DateTime $updatedCustomersCategory) {
        $this->idCustomersCategory = $idCustomersCategory;
        $this->nameCustomersCategory = $nameCustomersCategory;
        $this->activeCustomersCategory = $activeCustomersCategory;
        $this->createdCustomersCategory = $createdCustomersCategory;
        $this->updatedCustomersCategory = $updatedCustomersCategory;
    }

    public function getIdCustomersCategory(): int {
        return $this->idCustomersCategory;
    }

    public function getNameCustomersCategory(): string {
        return $this->nameCustomersCategory;
    }

    public function getActiveCustomersCategory(): int {
        return $this->activeCustomersCategory;
    }

    public function getCreatedCustomersCategory(): DateTime {
        return $this->createdCustomersCategory;
    }

    public function getUpdatedCustomersCategory(): DateTime {
        return $this->updatedCustomersCategory;
    }

    public function setIdCustomersCategory(int $idCustomersCategory): void {
        $this->idCustomersCategory = $idCustomersCategory;
    }

    public function setNameCustomersCategory(string $nameCustomersCategory): void {
        $this->nameCustomersCategory = $nameCustomersCategory;
    }

    public function setActiveCustomersCategory(int $activeCustomersCategory): void {
        $this->activeCustomersCategory = $activeCustomersCategory;
    }

    public function setCreatedCustomersCategory(DateTime $createdCustomersCategory): void {
        $this->createdCustomersCategory = $createdCustomersCategory;
    }

    public function setUpdatedCustomersCategory(DateTime $updatedCustomersCategory): void {
        $this->updatedCustomersCategory = $updatedCustomersCategory;
    }
}
