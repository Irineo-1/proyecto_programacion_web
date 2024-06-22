<?php

class Conexion {

    private static $host = "localhost:3307";
    private static $user = "root";
    private static $pass = "";
    private static $db = "login_register_db";

    public static function getConnetion() {
        return mysqli_connect(self::$host,self::$user,self::$pass,self::$db);
    }
}

?>