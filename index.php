<?php
include("controllers/movieController.php");
include("controllers/userController.php");

if(isset($_REQUEST["opc"])):
    $opc = $_REQUEST["opc"];
else:
    $opc = "home";
endif;

switch($_REQUEST["controller"]):
    case "movieController":
        $c = new MovieController();
        $c->main($_REQUEST["opc"]);
        break;
    case "userController":
        $c = new UserController();
        $c->main($_REQUEST["opc"]);
        break;
    default:
        $c = new MovieController();
        $c->main($opc);
        break;

endswitch;
/*$c = new Controller();
$c->main();*/