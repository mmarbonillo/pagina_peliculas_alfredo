<?php
include("./models/user.php");

class UserController {

    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function main($opc="showFormLogin"){
        $this->$opc();
    }

    private function showFormLogin() {
        $data["mensaje"] = (isset($_REQUEST["mensaje"]) ? $_REQUEST["mensaje"] : null);
        View::show("formLogin", $data);
    }

    private function processLogin() {
        $username = $_REQUEST['username'];
        $passwd = $_REQUEST['passwd'];
        $userOk = $this->user->getForUsername($username, $passwd);
        if ($userOk) {
            $data["session"] = 1;
            View::redirect("home", $data);
        } else {
            $data["session"] = 0;
            $data["mensaje"] = "Nombre de usuario o contraseña incorrecto";
            View::redirect("home", $data);
        }
    }

    private function closeSession() {
        $this->user->security->closeSession();
    }

}