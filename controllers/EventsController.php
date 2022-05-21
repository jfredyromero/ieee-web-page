<?php

require_once('./db/db.php');
require_once('./models/EventsModel.php');

class EventsController {

    public static function index(){

        require_once('./views/events.php');
    }
}

?>