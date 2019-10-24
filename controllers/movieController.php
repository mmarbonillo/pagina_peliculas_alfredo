<?php
include("./view.php");
include("./models/movie.php");
include("./models/people.php");
include("./security.php");

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
        $this->$opc();
    }

    private function home(){
        $movies = $this->m->getAllMovies();
        //var_dump($movies);
        $data["movies"] = $movies;
        $data["session"] = Security::isSessionOpen();
        //var_dump($data["session"]);
        View::show("home", $data);
    }

    private function openMovie() {
        if(isset($_REQUEST["movie"])):
            $id = $_REQUEST["movie"];
        else:
            $id = $data["movie"];
        endif;
        $data["movie"] = $this->m->getOneMovie($id);
        $data["actor"] = $this->p->getActorForMovie($id);
        $data["director"] = $this->p->getDirectorsForMovie($id);
        $data["session"] = Security::isSessionOpen();
        if($data["session"]):
            $data["noact"] = $this->p->getPeopleWhoNotActMovie($id);
            $data["nodirect"] = $this->p->getPeopleWhoNotDirectMovie($id);
            View::show("editMovie", $data);
        else:
            View::show("movieView", $data);
            //View::show("error", $data);
        endif;
    }

    private function addActorMovie() {
        $actor = $_REQUEST["people"];
        $movie = $_REQUEST["movie"];
        $add = $this->p->addActorToMovie($actor, $movie);
        $data["actor"] = $this->p->getActorForMovie($actor);
        $data["director"] = $this->p->getDirectorsForMovie($movie);
        $data["noact"] = $this->p->getPeopleWhoNotActMovie($movie);
        $data["session"] = Security::isSessionOpen();
        $data["movie"] = $this->m->getOneMovie($movie);
        $data["display"] = "block";
        View::show("editMovie", $data); //esto tiene que ser un redirect
    }

    private function addDirectorMovie() {
        $director = $_REQUEST["people"];
        $movie = $_REQUEST["movie"];
        $add = $this->p->addDirectorToMovie($director, $movie);
        $data["actor"] = $this->p->getActorForMovie($movie);
        $data["director"] = $this->p->getDirectorsForMovie($movie);
        $data["nodirect"] = $this->p->getPeopleWhoNotDirectMovie($movie);
        $data["session"] = Security::isSessionOpen();
        $data["movie"] = $this->m->getOneMovie($movie);
        $data["display"] = "block";
        View::show("editMovie", $data);
    }

}