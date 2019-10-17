<?php

class Actor {

    public function getAllActor() {
        $sql = "SELECT * FROM people JOIN people_act_movies WHERE people.id = id_actor";
    }

    public function getActorForMovie($movieId) {
        $sql = "SELECT actor.*
                FROM movies JOIN people_act_movies
                ON movies.id = id_movie
                JOIN people
                ON id_actor = people.id
                WHERE movie.id = ".$movieId;
    }

}