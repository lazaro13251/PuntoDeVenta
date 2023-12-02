<?php

class Customers {

    private int $idCustomers;
    private string $nameCustomers;
    private string $paternalCustomers;
    private string $maternalCustomers;
    private string $mailCustomers;
    private string $phoneCustomers;
    private string $birthCustomers;
    private int $categoryCustomers;
    private int $activeCustomers;
    private DateTime $createdCustomers;
    private DateTime $updatedCustomers;

    public function __construct(int $idCustomers, string $nameCustomers, string $paternalCustomers, string $maternalCustomers, string $mailCustomers, string $phoneCustomers, string $birthCustomers, int $categoryCustomers, int $activeCustomers, DateTime $createdCustomers, DateTime $updatedCustomers) {
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

    public function getIdCustomers(): int {
        return $this->idCustomers;
    }

    public function getNameCustomers(): string {
        return $this->nameCustomers;
    }

    public function getPaternalCustomers(): string {
        return $this->paternalCustomers;
    }

    public function getMaternalCustomers(): string {
        return $this->maternalCustomers;
    }

    public function getMailCustomers(): string {
        return $this->mailCustomers;
    }

    public function getPhoneCustomers(): string {
        return $this->phoneCustomers;
    }

    public function getBirthCustomers(): string {
        return $this->birthCustomers;
    }

    public function getCategoryCustomers(): int {
        return $this->categoryCustomers;
    }

    public function getActiveCustomers(): int {
        return $this->activeCustomers;
    }

    public function getCreatedCustomers(): DateTime {
        return $this->createdCustomers;
    }

    public function getUpdatedCustomers(): DateTime {
        return $this->updatedCustomers;
    }

    public function setIdCustomers(int $idCustomers): void {
        $this->idCustomers = $idCustomers;
    }

    public function setNameCustomers(string $nameCustomers): void {
        $this->nameCustomers = $nameCustomers;
    }

    public function setPaternalCustomers(string $paternalCustomers): void {
        $this->paternalCustomers = $paternalCustomers;
    }

    public function setMaternalCustomers(string $maternalCustomers): void {
        $this->maternalCustomers = $maternalCustomers;
    }

    public function setMailCustomers(string $mailCustomers): void {
        $this->mailCustomers = $mailCustomers;
    }

    public function setPhoneCustomers(string $phoneCustomers): void {
        $this->phoneCustomers = $phoneCustomers;
    }

    public function setBirthCustomers(string $birthCustomers): void {
        $this->birthCustomers = $birthCustomers;
    }

    public function setCategoryCustomers(int $categoryCustomers): void {
        $this->categoryCustomers = $categoryCustomers;
    }

    public function setActiveCustomers(int $activeCustomers): void {
        $this->activeCustomers = $activeCustomers;
    }

    public function setCreatedCustomers(DateTime $createdCustomers): void {
        $this->createdCustomers = $createdCustomers;
    }

    public function setUpdatedCustomers(DateTime $updatedCustomers): void {
        $this->updatedCustomers = $updatedCustomers;
    }
}
