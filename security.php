<?php

class Security {

    public function __construct() {
        session_start();
    }

    /*public function openSession() {
        session_start();
    }*/

    public function isSessionOpen() {
        if(isset($_SESSION["id"]) && isset($_SESSION["type"])):
            return true;
        else:
            return false;
        endif;
    }

    public function getId() {
        return $_SESSION["id"];
    }

    public function getType() {
        return $_SESSION["type"];
    }

    public function closeSession() {
        session_destroy();
    }

}