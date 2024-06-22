<?php

class Categorias {

    private static $Tabla = "categorias"; 

    public static function getAllCategorias() {
        $conn = Conexion::getConnetion();
        $query = "SELECT * FROM ".self::$Tabla."";

        $res = $conn->query($query);
        $data = [];

        while($row = $res->fetch_assoc()) {
            array_push($data, $row);
        }

        return $data;
    }

}

?>