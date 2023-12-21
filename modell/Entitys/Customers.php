<?php

class Customers {

    private $idCustomers;
    private $nameCustomers;
    private $paternalCustomers;
    private $maternalCustomers;
    private $mailCustomers;
    private $phoneCustomers;
    private $birthCustomers;
    private $categoryCustomers;
    private $activeCustomers;
    private $createdCustomers;
    private $updatedCustomers;

    public function __construct($idCustomers, $nameCustomers, $paternalCustomers, $maternalCustomers, $mailCustomers, $phoneCustomers, $birthCustomers, $categoryCustomers, $activeCustomers, $createdCustomers, $updatedCustomers) {
        $this->idCustomers = $idCustomers;
        $this->nameCustomers = $nameCustomers;
        $this->paternalCustomers = $paternalCustomers;
        $this->maternalCustomers = $maternalCustomers;
        $this->mailCustomers = $mailCustomers;
        $this->phoneCustomers = $phoneCustomers;
        $this->birthCustomers = $birthCustomers;
        $this->categoryCustomers = $categoryCustomers;
        $this->activeCustomers = $activeCustomers;
        $this->createdCustomers = $createdCustomers;
        $this->updatedCustomers = $updatedCustomers;
    }

    public function getIdCustomers() {
        return $this->idCustomers;
    }

    public function getNameCustomers() {
        return $this->nameCustomers;
    }

    public function getPaternalCustomers() {
        return $this->paternalCustomers;
    }

    public function getMaternalCustomers() {
        return $this->maternalCustomers;
    }

    public function getMailCustomers() {
        return $this->mailCustomers;
    }

    public function getPhoneCustomers() {
        return $this->phoneCustomers;
    }

    public function getBirthCustomers() {
        return $this->birthCustomers;
    }

    public function getCategoryCustomers() {
        return $this->categoryCustomers;
    }

    public function getActiveCustomers() {
        return $this->activeCustomers;
    }

    public function getCreatedCustomers() {
        return $this->createdCustomers;
    }

    public function getUpdatedCustomers() {
        return $this->updatedCustomers;
    }

    public function setIdCustomers($idCustomers): void {
        $this->idCustomers = $idCustomers;
    }

    public function setNameCustomers($nameCustomers): void {
        $this->nameCustomers = $nameCustomers;
    }

    public function setPaternalCustomers($paternalCustomers): void {
        $this->paternalCustomers = $paternalCustomers;
    }

    public function setMaternalCustomers($maternalCustomers): void {
        $this->maternalCustomers = $maternalCustomers;
    }

    public function setMailCustomers($mailCustomers): void {
        $this->mailCustomers = $mailCustomers;
    }

    public function setPhoneCustomers($phoneCustomers): void {
        $this->phoneCustomers = $phoneCustomers;
    }

    public function setBirthCustomers($birthCustomers): void {
        $this->birthCustomers = $birthCustomers;
    }

    public function setCategoryCustomers($categoryCustomers): void {
        $this->categoryCustomers = $categoryCustomers;
    }

    public function setActiveCustomers($activeCustomers): void {
        $this->activeCustomers = $activeCustomers;
    }

    public function setCreatedCustomers($createdCustomers): void {
        $this->createdCustomers = $createdCustomers;
    }

    public function setUpdatedCustomers($updatedCustomers): void {
        $this->updatedCustomers = $updatedCustomers;
    }
}
