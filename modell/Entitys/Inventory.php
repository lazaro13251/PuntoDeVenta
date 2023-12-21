<?php

class Inventory {

    private $idInventory;
    private $idArticleInventory;
    private $stockArticleInventory;
    private $minimumInventory;
    private $updatedInventory;

    public function __construct($idInventory, $idArticleInventory, $stockArticleInventory, $minimumInventory, $updatedInventory) {
        $this->idInventory = $idInventory;
        $this->idArticleInventory = $idArticleInventory;
        $this->stockArticleInventory = $stockArticleInventory;
        $this->minimumInventory = $minimumInventory;
        $this->updatedInventory = $updatedInventory;
    }

    public function getIdInventory() {
        return $this->idInventory;
    }

    public function getIdArticleInventory() {
        return $this->idArticleInventory;
    }

    public function getStockArticleInventory() {
        return $this->stockArticleInventory;
    }

    public function getMinimumInventory() {
        return $this->minimumInventory;
    }

    public function getUpdatedInventory() {
        return $this->updatedInventory;
    }

    public function setIdInventory($idInventory): void {
        $this->idInventory = $idInventory;
    }

    public function setIdArticleInventory($idArticleInventory): void {
        $this->idArticleInventory = $idArticleInventory;
    }

    public function setStockArticleInventory($stockArticleInventory): void {
        $this->stockArticleInventory = $stockArticleInventory;
    }

    public function setMinimumInventory($minimumInventory): void {
        $this->minimumInventory = $minimumInventory;
    }

    public function setUpdatedInventory($updatedInventory): void {
        $this->updatedInventory = $updatedInventory;
    }
}
