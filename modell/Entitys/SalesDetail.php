<?php

class SalesDetail {

    private $idSaleDetail;
    private $idSale;
    private $idArticleSaleDetail;
    private $numberArticleSaleDetail;
    private $subtotalSaleDetail;
    private $activeSaleDetail;
    private $createdSaleDetail;
    private $updatedSaleDetail;

    public function __construct($idSaleDetail, $idSale, $idArticleSaleDetail, $numberArticleSaleDetail, $subtotalSaleDetail, $activeSaleDetail, $createdSaleDetail, $updatedSaleDetail) {
        $this->idSaleDetail = $idSaleDetail;
        $this->idSale = $idSale;
        $this->idArticleSaleDetail = $idArticleSaleDetail;
        $this->numberArticleSaleDetail = $numberArticleSaleDetail;
        $this->subtotalSaleDetail = $subtotalSaleDetail;
        $this->activeSaleDetail = $activeSaleDetail;
        $this->createdSaleDetail = $createdSaleDetail;
        $this->updatedSaleDetail = $updatedSaleDetail;
    }

    public function getIdSaleDetail() {
        return $this->idSaleDetail;
    }

    public function getIdSale() {
        return $this->idSale;
    }

    public function getIdArticleSaleDetail() {
        return $this->idArticleSaleDetail;
    }

    public function getNumberArticleSaleDetail() {
        return $this->numberArticleSaleDetail;
    }

    public function getSubtotalSaleDetail() {
        return $this->subtotalSaleDetail;
    }

    public function getActiveSaleDetail() {
        return $this->activeSaleDetail;
    }

    public function getCreatedSaleDetail() {
        return $this->createdSaleDetail;
    }

    public function getUpdatedSaleDetail() {
        return $this->updatedSaleDetail;
    }

    public function setIdSaleDetail($idSaleDetail): void {
        $this->idSaleDetail = $idSaleDetail;
    }

    public function setIdSale($idSale): void {
        $this->idSale = $idSale;
    }

    public function setIdArticleSaleDetail($idArticleSaleDetail): void {
        $this->idArticleSaleDetail = $idArticleSaleDetail;
    }

    public function setNumberArticleSaleDetail($numberArticleSaleDetail): void {
        $this->numberArticleSaleDetail = $numberArticleSaleDetail;
    }

    public function setSubtotalSaleDetail($subtotalSaleDetail): void {
        $this->subtotalSaleDetail = $subtotalSaleDetail;
    }

    public function setActiveSaleDetail($activeSaleDetail): void {
        $this->activeSaleDetail = $activeSaleDetail;
    }

    public function setCreatedSaleDetail($createdSaleDetail): void {
        $this->createdSaleDetail = $createdSaleDetail;
    }

    public function setUpdatedSaleDetail($updatedSaleDetail): void {
        $this->updatedSaleDetail = $updatedSaleDetail;
    }
}
