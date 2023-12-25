<?php

class Tickets {

    public $idTicket;
    public $idSaleTicket;
    public $totalTicket;
    public $activeTicket;
    public $createdTicket;
    public $updateTicket;

    public function __construct($idTicket, $idSaleTicket, $totalTicket, $activeTicket, $createdTicket, $updateTicket) {
        $this->idTicket = $idTicket;
        $this->idSaleTicket = $idSaleTicket;
        $this->totalTicket = $totalTicket;
        $this->activeTicket = $activeTicket;
        $this->createdTicket = $createdTicket;
        $this->updateTicket = $updateTicket;
    }

    public function getIdTicket() {
        return $this->idTicket;
    }

    public function getIdSaleTicket() {
        return $this->idSaleTicket;
    }

    public function getTotalTicket() {
        return $this->totalTicket;
    }

    public function getActiveTicket() {
        return $this->activeTicket;
    }

    public function getCreatedTicket() {
        return $this->createdTicket;
    }

    public function getUpdateTicket() {
        return $this->updateTicket;
    }

    public function setIdTicket($idTicket): void {
        $this->idTicket = $idTicket;
    }

    public function setIdSaleTicket($idSaleTicket): void {
        $this->idSaleTicket = $idSaleTicket;
    }

    public function setTotalTicket($totalTicket): void {
        $this->totalTicket = $totalTicket;
    }

    public function setActiveTicket($activeTicket): void {
        $this->activeTicket = $activeTicket;
    }

    public function setCreatedTicket($createdTicket): void {
        $this->createdTicket = $createdTicket;
    }

    public function setUpdateTicket($updateTicket): void {
        $this->updateTicket = $updateTicket;
    }
}
