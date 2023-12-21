<?php

class UsersRolls {

    private $idUserRoll;
    private $nameUserRoll;
    private $activeUserRoll;
    private $createdUserRoll;
    private $updatedUserRoll;

    public function __construct($idUserRoll, $nameUserRoll, $activeUserRoll, $createdUserRoll, $updatedUserRoll) {
        $this->idUserRoll = $idUserRoll;
        $this->nameUserRoll = $nameUserRoll;
        $this->activeUserRoll = $activeUserRoll;
        $this->createdUserRoll = $createdUserRoll;
        $this->updatedUserRoll = $updatedUserRoll;
    }

    public function getIdUserRoll() {
        return $this->idUserRoll;
    }

    public function getNameUserRoll() {
        return $this->nameUserRoll;
    }

    public function getActiveUserRoll() {
        return $this->activeUserRoll;
    }

    public function getCreatedUserRoll() {
        return $this->createdUserRoll;
    }

    public function getUpdatedUserRoll() {
        return $this->updatedUserRoll;
    }

    public function setIdUserRoll($idUserRoll): void {
        $this->idUserRoll = $idUserRoll;
    }

    public function setNameUserRoll($nameUserRoll): void {
        $this->nameUserRoll = $nameUserRoll;
    }

    public function setActiveUserRoll($activeUserRoll): void {
        $this->activeUserRoll = $activeUserRoll;
    }

    public function setCreatedUserRoll($createdUserRoll): void {
        $this->createdUserRoll = $createdUserRoll;
    }

    public function setUpdatedUserRoll($updatedUserRoll): void {
        $this->updatedUserRoll = $updatedUserRoll;
    }
}
