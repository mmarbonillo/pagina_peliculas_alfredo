<?php

class People {

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
                WHERE movie.id = ".$movieId;
    }

    public function getDirectorsForMovie($movieId) {
        $sql = "SELECT people.*
                FROM movies JOIN people_act_movies
                ON movies.id = id_movie
                JOIN people
                ON id_director = people.id
                WHERE movie.id = ".$movieId;
    }
    
}