<?php

class Movie {

    public function getAllMovies() {
        $sql = "SELECT * FROM movies";
    }

    public function getAllGenres() {
        $sql = "SELECT * FROM genre";
    }

    public function getMoviesForActor($actorId) {
        $sql = "SELECT movies.*
                FROM movies JOIN people_act_movies
                ON movies.id = id_movie
                JOIN people
                ON id_actor = people.id
                WHERE people.id = ".$actorId;
    }

    public function getMoviesForDirector($directorId) {
        $sql = "SELECT movies.*
                FROM movies JOIN people_direct_movies
                ON movies.id = id_movie
                JOIN people
                ON id_director = people.id
                WHERE people.id = ".$directorId;
    }

    public function getMoviesForGenre($genreId) {
        $sql = "SELECT movies.*
                FROM movies JOIN movie_has_genre
                ON movies.id = id_movie
                JOIN genre
                ON id_genre = genre.id
                WHERE genre.id = ".$genreId;
    }

}