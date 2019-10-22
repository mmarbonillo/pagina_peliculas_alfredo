<?php

class People {

    private $db;

    public function __construct(){
        //$this->db = new DBConnector(DBInfo::getDbHost(), DBInfo::getDbUser(), DBInfo::getDbPassword(), DBInfo::getDbName());
        $this->db = new DBConnector("localhost", "root", "", "cine");
    }

    public function getAllActor() {
        $sql = "SELECT * FROM people JOIN people_act_movies WHERE people.id = id_actor";
    }

    public function getAllDirectors() {
        $sql = "SELECT * FROM people JOIN people_direct_movies WHERE people.id = id_director";
    }

    public function getActorForMovie($movieId) {
        $sql = "SELECT people.*
                FROM movies JOIN people_act_movies
                ON movies.id = id_movie
                JOIN people
                ON id_actor = people.id
                WHERE movies.id = ".$movieId;
        $result = $this->db->select($sql);
        return $result;
    }

    public function getDirectorsForMovie($movieId) {
        $sql = "SELECT people.*
                FROM movies JOIN people_direct_movies
                ON movies.id = id_movie
                JOIN people
                ON id_director = people.id
                WHERE movies.id = ".$movieId;
        $result = $this->db->select($sql);
        return $result;
    }
    
}