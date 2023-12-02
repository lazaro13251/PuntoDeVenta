<?php

class SalesDetail {

    private int $idSaleDetail;
    private int $idSale;
    private int $idArticleSaleDetail;
    private float $numberArticleSaleDetail;
    private float $subtotalSaleDetail;
    private int $activeSaleDetail;
    private DateTime $createdSaleDetail;
    private DateTime $updatedSaleDetail;

    public function __construct(int $idSaleDetail, int $idSale, int $idArticleSaleDetail, float $numberArticleSaleDetail, float $subtotalSaleDetail, int $activeSaleDetail, DateTime $createdSaleDetail, DateTime $updatedSaleDetail) {
        $this->idSaleDetail = $idSaleDetail;
        $this->idSale = $idSale;
        $this->idArticleSaleDetail = $idArticleSaleDetail;
        $this->numberArticleSaleDetail = $numberArticleSaleDetail;
        $this->subtotalSaleDetail = $subtotalSaleDetail;
        $this->activeSaleDetail = $activeSaleDetail;
        $this->createdSaleDetail = $createdSaleDetail;
        $this->updatedSaleDetail = $updatedSaleDetail;
    }

    public function getIdSaleDetail(): int {
        return $this->idSaleDetail;
    }

    public function getIdSale(): int {
        return $this->idSale;
    }

    public function getIdArticleSaleDetail(): int {
        return $this->idArticleSaleDetail;
    }

    public function getNumberArticleSaleDetail(): float {
        return $this->numberArticleSaleDetail;
    }

    public function getSubtotalSaleDetail(): float {
        return $this->subtotalSaleDetail;
    }

    public function getActiveSaleDetail(): int {
        return $this->activeSaleDetail;
    }

    public function getCreatedSaleDetail(): DateTime {
        return $this->createdSaleDetail;
    }

    public function getUpdatedSaleDetail(): DateTime {
        return $this->updatedSaleDetail;
    }

    public function setIdSaleDetail(int $idSaleDetail): void {
        $this->idSaleDetail = $idSaleDetail;
    }

    public function setIdSale(int $idSale): void {
        $this->idSale = $idSale;
    }

    public function setIdArticleSaleDetail(int $idArticleSaleDetail): void {
        $this->idArticleSaleDetail = $idArticleSaleDetail;
    }

    public function setNumberArticleSaleDetail(float $numberArticleSaleDetail): void {
        $this->numberArticleSaleDetail = $numberArticleSaleDetail;
    }

    public function setSubtotalSaleDetail(float $subtotalSaleDetail): void {
        $this->subtotalSaleDetail = $subtotalSaleDetail;
    }

    public function setActiveSaleDetail(int $activeSaleDetail): void {
        $this->activeSaleDetail = $activeSaleDetail;
    }

    public function setCreatedSaleDetail(DateTime $createdSaleDetail): void {
        $this->createdSaleDetail = $createdSaleDetail;
    }

    public function setUpdatedSaleDetail(DateTime $updatedSaleDetail): void {
        $this->updatedSaleDetail = $updatedSaleDetail;
    }
}
