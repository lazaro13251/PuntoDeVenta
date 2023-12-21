<?php

class Sales {

    private $idSale;
    private $idCustomerSale;
    private $totalSale;
    private $activeSale;
    private $createdSale;
    private $updatedSale;

    public function __construct($idSale, $idCustomerSale, $totalSale, $activeSale, $createdSale, $updatedSale) {
        $this->idSale = $idSale;
        $this->idCustomerSale = $idCustomerSale;
        $this->totalSale = $totalSale;
        $this->activeSale = $activeSale;
        $this->createdSale = $createdSale;
        $this->updatedSale = $updatedSale;
    }

    public function getIdSale() {
        return $this->idSale;
    }

    public function getIdCustomerSale() {
        return $this->idCustomerSale;
    }

    public function getTotalSale() {
        return $this->totalSale;
    }

    public function getActiveSale() {
        return $this->activeSale;
    }

    public function getCreatedSale() {
        return $this->createdSale;
    }

    public function getUpdatedSale() {
        return $this->updatedSale;
    }

    public function setIdSale($idSale): void {
        $this->idSale = $idSale;
    }

    public function setIdCustomerSale($idCustomerSale): void {
        $this->idCustomerSale = $idCustomerSale;
    }

    public function setTotalSale($totalSale): void {
        $this->totalSale = $totalSale;
    }

    public function setActiveSale($activeSale): void {
        $this->activeSale = $activeSale;
    }

    public function setCreatedSale($createdSale): void {
        $this->createdSale = $createdSale;
    }

    public function setUpdatedSale($updatedSale): void {
        $this->updatedSale = $updatedSale;
    }
}
