<?php

require_once('./ieee/db/db.php');

class YearbookModel
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getMiembros($anio, $intervalo){
        $this->db->getConnection();
        $query = "SELECT * from miembros WHERE anioIngresoRama>=$anio AND anioIngresoRama<$anio+$intervalo AND estado=1";
        $result = $this->db->getData($query);
        return $result;
    }
}
