<?php

class Tickets {

    public $idTicket;
    public $idSale;
    public $activeTicket;
    public $createdTicket;
    public $updateTicket;

    public function __construct($idTicket, $idSale, $activeTicket, $createdTicket, $updateTicket) {
        $this->idTicket = $idTicket;
        $this->idSale = $idSale;
        $this->activeTicket = $activeTicket;
        $this->createdTicket = $createdTicket;
        $this->updateTicket = $updateTicket;
    }

    public function getIdTicket() {
        return $this->idTicket;
    }

    public function getIdSale() {
        return $this->idSale;
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

    public function setIdSale($idSale): void {
        $this->idSale = $idSale;
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
