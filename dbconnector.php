<?php

class DBConnector {

    private $connector;

    public function __construct($dbhost, $dbuser, $dbpasswd, $dbname) {
        $this->connector = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
    }

    

}