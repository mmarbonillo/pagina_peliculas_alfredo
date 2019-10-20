<?php
include("./dbconnector.php");
include("./dbInfo.php");

class Movie {

    private $db;

    public function __construct(){
        $this->db = new DBConnector(DBInfo::getDbHost(), DBInfo::getDbUser(), DBInfo::getDbPassword(), DBInfo::getDbName());
    }

    public function getAllMovies() {
        $sql = "SELECT * FROM movies";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getMoviesForActor($actorId) {
        $sql = "SELECT movies.*
                FROM movies JOIN people_act_movies
                ON movies.id = id_movie
                WHERE actor_id = ".$actorId;
    }

    public function getMoviesForDirector($directorId) {
        $sql = "SELECT movies.*
                FROM movies JOIN people_direct_movies
                ON movies.id = id_movie
                WHERE id_director = ".$directorId;
    }

    public function getMoviesForGenre($genreId) {
        $sql = "SELECT movies.*
                FROM movies JOIN movie_has_genre
                ON movies.id = id_movie
                WHERE genre_id = ".$genreId;
    }

}