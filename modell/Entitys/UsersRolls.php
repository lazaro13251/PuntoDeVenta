<?php

class UsersRolls {

    private int $idUserRoll;
    private string $nameUserRoll;
    private int $activeUserRoll;
    private DateTime $createdUserRoll;
    private DateTime $updatedUserRoll;

    public function __construct(int $idUserRoll, string $nameUserRoll, int $activeUserRoll, DateTime $createdUserRoll, DateTime $updatedUserRoll) {
        $this->idUserRoll = $idUserRoll;
        $this->nameUserRoll = $nameUserRoll;
        $this->activeUserRoll = $activeUserRoll;
        $this->createdUserRoll = $createdUserRoll;
        $this->updatedUserRoll = $updatedUserRoll;
    }

    public function getIdUserRoll(): int {
        return $this->idUserRoll;
    }

    public function getNameUserRoll(): string {
        return $this->nameUserRoll;
    }

    public function getActiveUserRoll(): int {
        return $this->activeUserRoll;
    }

    public function getCreatedUserRoll(): DateTime {
        return $this->createdUserRoll;
    }

    public function getUpdatedUserRoll(): DateTime {
        return $this->updatedUserRoll;
    }

    public function setIdUserRoll(int $idUserRoll): void {
        $this->idUserRoll = $idUserRoll;
    }

    public function setNameUserRoll(string $nameUserRoll): void {
        $this->nameUserRoll = $nameUserRoll;
    }

    public function setActiveUserRoll(int $activeUserRoll): void {
        $this->activeUserRoll = $activeUserRoll;
    }

    public function setCreatedUserRoll(DateTime $createdUserRoll): void {
        $this->createdUserRoll = $createdUserRoll;
    }

    public function setUpdatedUserRoll(DateTime $updatedUserRoll): void {
        $this->updatedUserRoll = $updatedUserRoll;
    }
}
