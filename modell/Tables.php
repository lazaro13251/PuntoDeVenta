<?php

class Tables {

    public string $nombreTabla;
    public $camposTabla = array();

    public function __construct(string $nombreTabla) {
        $this->nombreTabla = $nombreTabla;
    }

    public function getNombreTabla(): string {
        return $this->nombreTabla;
    }

    public function addCamposTabla(string $nombre) {
        $this->camposTabla[] = $nombre;
        return $this->camposTabla;
    }

    public function getCamposTabla() {
        return $this->camposTabla;
    }
}
