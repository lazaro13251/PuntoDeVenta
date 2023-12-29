<?php

class DBConn {

    private static $conexion;

    public static function obtenerConexion() {
        if (!isset(self::$conexion)) {
            try {
                self::$conexion = new PDO('mysql:host=127.0.0.1; dbname=purificadora', 'root', '');
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        return self::$conexion;
    }
}
