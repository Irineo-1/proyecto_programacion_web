<?php

require "../config/conexion.php";

class Productos {

    private static $Tabla = "productos"; 

    public static function getAllProducts() {
        $conn = Conexion::getConnetion();
        $query = "SELECT * FROM ".self::$Tabla."";

        $res = $conn->query($query);
        $data = [];

        while($row = $res->fetch_assoc()) {
            array_push($data, $row);
        }

        return $data;
    }

    public static function getLimitProducts($limit) {
        $conn = Conexion::getConnetion();
        $query = "SELECT * FROM ".self::$Tabla." LIMIT $limit";

        $res = $conn->query($query);
        $data = [];

        while($row = $res->fetch_assoc()) {
            array_push($data, $row);
        }

        return $data;
    }

    public static function getProductsByCategory($category) {
        $conn = Conexion::getConnetion();
        $query = "SELECT * FROM ".self::$Tabla." WHERE id_categoria = $category";

        $res = $conn->query($query);
        $data = [];

        while($row = $res->fetch_assoc()) {
            array_push($data, $row);
        }

        return $data;
    }

    public static function subtractProduct($cantidad) {
        $conn = Conexion::getConnetion();
        $query = "UPDATE ".self::$Tabla." SET existencia = existencia - $cantidad";

        $res = $conn->query($query);

        return $res;
    }
}

?>