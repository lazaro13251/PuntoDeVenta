<?php

class Users {

    private int $idUser;
    private string $nameUser;
    private string $passwordUser;
    private int $idUserRoll;
    private int $activeUser;
    private DateTime $createdUser;
    private DateTime $updatedUser;

    public function __construct(int $idUser, string $nameUser, string $passwordUser, int $idUserRoll, int $activeUser, DateTime $createdUser, DateTime $updatedUser) {
        $this->idUser = $idUser;
        $this->nameUser = $nameUser;
        $this->passwordUser = $passwordUser;
        $this->idUserRoll = $idUserRoll;
        $this->activeUser = $activeUser;
        $this->createdUser = $createdUser;
        $this->updatedUser = $updatedUser;
    }

    public function getIdUser(): int {
        return $this->idUser;
    }

    public function getNameUser(): string {
        return $this->nameUser;
    }

    public function getPasswordUser(): string {
        return $this->passwordUser;
    }

    public function getIdUserRoll(): int {
        return $this->idUserRoll;
    }

    public function getActiveUser(): int {
        return $this->activeUser;
    }

    public function getCreatedUser(): DateTime {
        return $this->createdUser;
    }

    public function getUpdatedUser(): DateTime {
        return $this->updatedUser;
    }

    public function setIdUser(int $idUser): void {
        $this->idUser = $idUser;
    }

    public function setNameUser(string $nameUser): void {
        $this->nameUser = $nameUser;
    }

    public function setPasswordUser(string $passwordUser): void {
        $this->passwordUser = $passwordUser;
    }

    public function setIdUserRoll(int $idUserRoll): void {
        $this->idUserRoll = $idUserRoll;
    }

    public function setActiveUser(int $activeUser): void {
        $this->activeUser = $activeUser;
    }

    public function setCreatedUser(DateTime $createdUser): void {
        $this->createdUser = $createdUser;
    }

    public function setUpdatedUser(DateTime $updatedUser): void {
        $this->updatedUser = $updatedUser;
    }
}
