<?php
include("./view.php");
include("./models/movie.php");
include("./models/people.php");

class MovieController {

    private $m;
    private $p;
    
    public function __construct() {
        $this->m = new Movie();
        $this->p = new People();
    }

    /**
     * Función principal del controlador. Todas las peticiones pasan por aquí
     */
    public function main($opc="home") {
        /*if (isset($_REQUEST["opc"])) {
            $opc = $_REQUEST["opc"];
        } else {
            //COMPROBAR SESION INICIADA
            if(Security::getId() != -1):
                $opc = "home";
            else:
                $opc = "home";
            endif;
        }*/
        $this->$opc();
    }

    public function home(){
        $movies = $this->m->getAllMovies();
        //var_dump($movies);
        $data["movies"] = $movies;
        View::show("home", $data);
    }

    public function openMovie() {
        $data["movie"] = $this->m->getOneMovie($_REQUEST["id"]);
        $data["actor"] = $this->p->getActorForMovie($_REQUEST["id"]);
        $data["director"] = $this->p->getDirectorsForMovie($_REQUEST["id"]);
        View::show("movieView", $data);
    }

    public function editMovie() {
        $data["movie"] = $this->m->getOneMovie($_REQUEST["id"]);
        $data["actor"] = $this->p->getActorForMovie($_REQUEST["id"]);
        $data["director"] = $this->p->getDirectorsForMovie($_REQUEST["id"]);
        View::show("editMovie", $data);
    }

}