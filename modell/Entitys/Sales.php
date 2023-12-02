<?php

class Sales {

    private int $idSale;
    private int $idCustomerSale;
    private float $totalSale;
    private int $activeSale;
    private DateTime $createdSale;
    private DateTime $updatedSale;

    public function __construct(int $idSale, int $idCustomerSale, float $totalSale, int $activeSale, DateTime $createdSale, DateTime $updatedSale) {
        $this->idSale = $idSale;
        $this->idCustomerSale = $idCustomerSale;
        $this->totalSale = $totalSale;
        $this->activeSale = $activeSale;
        $this->createdSale = $createdSale;
        $this->updatedSale = $updatedSale;
    }

    public function getIdSale(): int {
        return $this->idSale;
    }

    public function getIdCustomerSale(): int {
        return $this->idCustomerSale;
    }

    public function getTotalSale(): float {
        return $this->totalSale;
    }

    public function getActiveSale(): int {
        return $this->activeSale;
    }

    public function getCreatedSale(): DateTime {
        return $this->createdSale;
    }

    public function getUpdatedSale(): DateTime {
        return $this->updatedSale;
    }

    public function setIdSale(int $idSale): void {
        $this->idSale = $idSale;
    }

    public function setIdCustomerSale(int $idCustomerSale): void {
        $this->idCustomerSale = $idCustomerSale;
    }

    public function setTotalSale(float $totalSale): void {
        $this->totalSale = $totalSale;
    }

    public function setActiveSale(int $activeSale): void {
        $this->activeSale = $activeSale;
    }

    public function setCreatedSale(DateTime $createdSale): void {
        $this->createdSale = $createdSale;
    }

    public function setUpdatedSale(DateTime $updatedSale): void {
        $this->updatedSale = $updatedSale;
    }
}
