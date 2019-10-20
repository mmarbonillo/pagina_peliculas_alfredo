<?php

class Genre {

    public function getAllGenres() {
        $sql = "SELECT * FROM genre";
    }
    
    public function getGenreOfAMovie($movieId) {
        $sql = "SELECT genre 
                FROM genre JOIN movies_has_genre
                ON genre.id = id_genre
                WHERE id_movie = $movieId";
    }

}