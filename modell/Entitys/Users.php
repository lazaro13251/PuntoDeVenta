<?php

class Users {

    private $idUser;
    private $nameUser;
    private $passwordUser;
    private $idUserRoll;
    private $activeUser;
    private $createdUser;
    private $updatedUser;

    public function __construct($idUser, $nameUser, $passwordUser, $idUserRoll, $activeUser, $createdUser, $updatedUser) {
        $this->idUser = $idUser;
        $this->nameUser = $nameUser;
        $this->passwordUser = $passwordUser;
        $this->idUserRoll = $idUserRoll;
        $this->activeUser = $activeUser;
        $this->createdUser = $createdUser;
        $this->updatedUser = $updatedUser;
    }

    public function getIdUser() {
        return $this->idUser;
    }

    public function getNameUser() {
        return $this->nameUser;
    }

    public function getPasswordUser() {
        return $this->passwordUser;
    }

    public function getIdUserRoll() {
        return $this->idUserRoll;
    }

    public function getActiveUser() {
        return $this->activeUser;
    }

    public function getCreatedUser() {
        return $this->createdUser;
    }

    public function getUpdatedUser() {
        return $this->updatedUser;
    }

    public function setIdUser($idUser): void {
        $this->idUser = $idUser;
    }

    public function setNameUser($nameUser): void {
        $this->nameUser = $nameUser;
    }

    public function setPasswordUser($passwordUser): void {
        $this->passwordUser = $passwordUser;
    }

    public function setIdUserRoll($idUserRoll): void {
        $this->idUserRoll = $idUserRoll;
    }

    public function setActiveUser($activeUser): void {
        $this->activeUser = $activeUser;
    }

    public function setCreatedUser($createdUser): void {
        $this->createdUser = $createdUser;
    }

    public function setUpdatedUser($updatedUser): void {
        $this->updatedUser = $updatedUser;
    }
}
