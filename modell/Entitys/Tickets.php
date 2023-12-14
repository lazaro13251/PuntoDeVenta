<?php

class Tickets {

    public int $idTicket;
    public int $active;
    public string $created;
    public string $update;
    public string $fecha;
    public string $Total;
    public string $email_cliente;
    public string $Hora;

    public function __construct(int $idTicket, int $active, string $created, string $update, string $fecha, string $Total, string $email_cliente, string $Hora) {
        $this->idTicket = $idTicket;
        $this->active = $active;
        $this->created = $created;
        $this->update = $update;
        $this->fecha = $fecha;
        $this->Total = $Total;
        $this->email_cliente = $email_cliente;
        $this->Hora = $Hora;
    }

    public function getIdTicket(): int {
        return $this->idTicket;
    }

    public function getActive(): int {
        return $this->active;
    }

    public function getCreated(): string {
        return $this->created;
    }

    public function getUpdate(): string {
        return $this->update;
    }

    public function getFecha(): string {
        return $this->fecha;
    }

    public function getTotal(): string {
        return $this->Total;
    }

    public function getEmail_cliente(): string {
        return $this->email_cliente;
    }

    public function getHora(): string {
        return $this->Hora;
    }

    public function setIdTicket(int $idTicket): void {
        $this->idTicket = $idTicket;
    }

    public function setActive(int $active): void {
        $this->active = $active;
    }

    public function setCreated(string $created): void {
        $this->created = $created;
    }

    public function setUpdate(string $update): void {
        $this->update = $update;
    }

    public function setFecha(string $fecha): void {
        $this->fecha = $fecha;
    }

    public function setTotal(string $Total): void {
        $this->Total = $Total;
    }

    public function setEmail_cliente(string $email_cliente): void {
        $this->email_cliente = $email_cliente;
    }

    public function setHora(string $Hora): void {
        $this->Hora = $Hora;
    }

}
