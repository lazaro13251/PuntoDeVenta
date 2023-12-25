<?php

class Personnel {

    public $idPerson;
    public $namePerson;
    public $paternalPerson;
    public $maternalPerson;
    public $activePerson;
    public $createdPerson;
    public $updatedPerson;

    public function __construct($idPerson, $namePerson, $paternalPerson, $maternalPerson, $activePerson, $createdPerson, $updatedPerson) {
        $this->idPerson = $idPerson;
        $this->namePerson = $namePerson;
        $this->paternalPerson = $paternalPerson;
        $this->maternalPerson = $maternalPerson;
        $this->activePerson = $activePerson;
        $this->createdPerson = $createdPerson;
        $this->updatedPerson = $updatedPerson;
    }

    public function getIdPerson() {
        return $this->idPerson;
    }

    public function getNamePerson() {
        return $this->namePerson;
    }

    public function getPaternalPerson() {
        return $this->paternalPerson;
    }

    public function getMaternalPerson() {
        return $this->maternalPerson;
    }

    public function getActivePerson() {
        return $this->activePerson;
    }

    public function getCreatedPerson() {
        return $this->createdPerson;
    }

    public function getUpdatedPerson() {
        return $this->updatedPerson;
    }

    public function setIdPerson($idPerson): void {
        $this->idPerson = $idPerson;
    }

    public function setNamePerson($namePerson): void {
        $this->namePerson = $namePerson;
    }

    public function setPaternalPerson($paternalPerson): void {
        $this->paternalPerson = $paternalPerson;
    }

    public function setMaternalPerson($maternalPerson): void {
        $this->maternalPerson = $maternalPerson;
    }

    public function setActivePerson($activePerson): void {
        $this->activePerson = $activePerson;
    }

    public function setCreatedPerson($createdPerson): void {
        $this->createdPerson = $createdPerson;
    }

    public function setUpdatedPerson($updatedPerson): void {
        $this->updatedPerson = $updatedPerson;
    }
}
