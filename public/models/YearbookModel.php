<?php

require_once('./connection/db-connection.php');

class YearbookModel
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getMiembros($anio, $intervalo)
    {
        $this->db->getConnection();
        $query1 = "SELECT * from miembros WHERE anioIngresoRama>=$anio AND anioIngresoRama<$anio+$intervalo AND estado=1";
        $result = $this->db->getData($query1);
        for ($i = 0; $i < count($result); $i++) {
            $id = $result[$i]["id"];
            $query2 = "SELECT cargos.cargo, comites.comite, cargos.urlLogo FROM cargos_de_miembros JOIN cargos ON cargos_de_miembros.cargo=cargos.id LEFT JOIN comites ON cargos_de_miembros.comite=comites.id WHERE miembro=$id GROUP BY cargos.cargo ORDER BY cargos.id ASC LIMIT 3";
            $cargos = $this->db->getData($query2);
            $result[$i]["cargos"] = $cargos;
        }
        return $result;
    }

    public function getMiembro($id)
    {
        $this->db->getConnection();
        // Traigo los datos del miembro
        $query = "SELECT * from miembros WHERE id=$id";
        $result = $this->db->getData($query);
        $query2 = "SELECT cargos.cargo, comites.comite, cargos.urlLogo FROM cargos_de_miembros JOIN cargos ON cargos_de_miembros.cargo=cargos.id LEFT JOIN comites ON cargos_de_miembros.comite=comites.id WHERE miembro=$id ORDER BY cargos.id ASC";
        $cargos = $this->db->getData($query2);
        $result[0]["cargos"] = $cargos;
        return $result;
    }
}
