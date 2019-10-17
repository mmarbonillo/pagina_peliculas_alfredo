<?php

class Director {

    public function getAllDirectors() {
        $sql = "SELECT * FROM people JOIN people_direct_movies WHERE people.id = id_director";
    }
}