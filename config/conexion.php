<?php

class Conexion {

    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $db = "pfprogramacionweb";

    public static function getConnetion() {
        return mysqli_connect(self::$host,self::$user,self::$pass,self::$db);
    }
}

?>