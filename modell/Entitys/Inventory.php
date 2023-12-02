<?php

class Inventory {

    private int $idInventory;
    private int $idArticleInventory;
    private int $stockArticleInventory;
    private int $minimumInventory;
    private DateTime $updatedInventory;

    public function __construct(int $idInventory, int $idArticleInventory, int $stockArticleInventory, int $minimumInventory, DateTime $updatedInventory) {
        $this->idInventory = $idInventory;
        $this->idArticleInventory = $idArticleInventory;
        $this->stockArticleInventory = $stockArticleInventory;
        $this->minimumInventory = $minimumInventory;
        $this->updatedInventory = $updatedInventory;
    }

    public function getIdInventory(): int {
        return $this->idInventory;
    }

    public function getIdArticleInventory(): int {
        return $this->idArticleInventory;
    }

    public function getStockArticleInventory(): int {
        return $this->stockArticleInventory;
    }

    public function getMinimumInventory(): int {
        return $this->minimumInventory;
    }

    public function getUpdatedInventory(): DateTime {
        return $this->updatedInventory;
    }

    public function setIdInventory(int $idInventory): void {
        $this->idInventory = $idInventory;
    }

    public function setIdArticleInventory(int $idArticleInventory): void {
        $this->idArticleInventory = $idArticleInventory;
    }

    public function setStockArticleInventory(int $stockArticleInventory): void {
        $this->stockArticleInventory = $stockArticleInventory;
    }

    public function setMinimumInventory(int $minimumInventory): void {
        $this->minimumInventory = $minimumInventory;
    }

    public function setUpdatedInventory(DateTime $updatedInventory): void {
        $this->updatedInventory = $updatedInventory;
    }
}
