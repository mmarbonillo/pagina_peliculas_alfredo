<?php

class Security {

    /*public static function __construct() {
        session_start();
    }*/

    public static function openSession($id, $type) {
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["type"] = $type;
    }

    public static function isSessionOpen() {
        session_start();
        if(isset($_SESSION["id"]) && isset($_SESSION["type"])):
            return true;
        else:
            return false;
        endif;
    }

    public static function getId() {
        return $_SESSION["id"];
    }

    public static function getType() {
        return $_SESSION["type"];
    }

    public static function closeSession() {
        session_start();
        session_unset();
        session_destroy();
    }

}