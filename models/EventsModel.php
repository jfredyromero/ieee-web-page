<?php

require_once('./db/db.php');

class EventsModel{

    private $db;

    public function __construct(){
        $this->db = new DBConnection();
    }

}

?>