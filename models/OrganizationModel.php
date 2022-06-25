<?php

require_once('./db/db.php');

class OrganizationModel{

    private $db;
    
    public function __construct(){
        $this->db = new DBConnection();
    }
    
    public function getJuntaDirectiva(){
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id BETWEEN 4 AND 8) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);        
        return $result;
    }

    public function getCoordinadores(){
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id = 9) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getSubCoordinadores(){
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id = 11) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getComites(){
        $this->db->getConnection();
        $query = "SELECT * FROM comites";
        $result = $this->db->getData($query);
        return $result;
    }
}

?>