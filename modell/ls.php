<?php

class ls {

    private static $conexion;

    public static function obtenerConexion() {
        if (!isset(self::$conexion)) {
            try {
                self::$conexion = new PDO('mysql:host=192.168.100.56;dbname=purificadora', 'root', 'GalfLazaro7168');
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        return self::$conexion;
    }
}
