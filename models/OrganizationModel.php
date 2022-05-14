<?php

require_once('./db/db.php');

class OrganizationModel{

    private $db;
    
    public function __construct(){
        $this->db = new DBConnection();
    }
    
    public function getJuntaDirectiva(){
        $this->db->getConnection();
        $query = "SELECT * FROM miembros";
        $result = $this->db->getData($query);
        $this->db->closeConnection();
        return $result;
    }   
}

?>