<?php
include("view.php");

class Controller {
    
    public function __construct() {
        
    }

    /**
     * Función principal del controlador. Todas las peticiones pasan por aquí
     */
    public function main() {
        if (isset($_REQUEST["opc"])) {
            $opc = $_REQUEST["opc"];
        } else {
            //COMPROBAR SESION INICIADA
            if(Security::getId() != -1):
                $opc = "userMainMenu";
            else:
                $opc = "mainMenu";
            endif;
        }
        $this->$opc();
    }

}