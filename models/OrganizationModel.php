<?php

require_once('./db/db.php');

class OrganizationModel
{

    private $db;
    private $idCoordinadorTET = "SELECT id from cargos WHERE cargo = 'Coordinador TET'"; // 1
    private $idWebMaster = "SELECT id from cargos WHERE cargo = 'Web Master'"; // 2
    private $idCoordinadoraWIE = "SELECT id from cargos WHERE cargo = 'Coordinadora WIE'"; // 3
    private $idPresidente = "SELECT id from cargos WHERE cargo = 'Presidente'"; // 4 - Junta
    private $idVicepresidente = "SELECT id from cargos WHERE cargo = 'Vicepresidente'"; // 5 - Junta
    private $idFiscal = "SELECT id from cargos WHERE cargo = 'Fiscal'"; // 6 - Junta
    private $idTesorero = "SELECT id from cargos WHERE cargo = 'Tesorero'"; // 7 - Junta
    private $idSecretario = "SELECT id from cargos WHERE cargo = 'Secretario'"; // 8 - Junta
    private $idCoordinador = "SELECT id from cargos WHERE cargo = 'Coordinador'"; // 9
    private $idVoluntario = "SELECT id from cargos WHERE cargo = 'Voluntario'"; // 10
    private $idSubCoordinador = "SELECT id from cargos WHERE cargo = 'Subcoordinador'"; // 11

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getJuntaDirectiva()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id BETWEEN 4 AND 8) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getPresidente()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE c.id = 4 AND m.anioSalidaRama IS NULL";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getVicepresidente()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE c.id = 5 AND m.anioSalidaRama IS NULL";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getFiscal()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE c.id = 6 AND m.anioSalidaRama IS NULL";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getTesorero()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE c.id = 7 AND m.anioSalidaRama IS NULL";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getSecretario()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE c.id = 8 AND m.anioSalidaRama IS NULL";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getCoordinadores()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id = 9) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getSubCoordinadores()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM miembros AS m INNER JOIN cargos_de_miembros AS cdm ON m.id = cdm.miembro INNER JOIN cargos AS c ON cdm.cargo = c.id WHERE (c.id = 11) AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getComites()
    {
        $this->db->getConnection();
        $query = "SELECT * FROM comites";
        $result = $this->db->getData($query);
        return $result;
    }

    public function getComiteByNombre($comite)
    {
        $this->db->getConnection();
        $query = "SELECT cargos.cargo, m.* FROM comites c JOIN cargos_de_miembros cdm ON c.id = cdm.comite JOIN cargos ON cdm.cargo = cargos.id JOIN miembros m ON cdm.miembro = m.id WHERE (cdm.cargo = ($this->idCoordinador) OR cdm.cargo = ($this->idSubCoordinador)) AND c.comite = '$comite' AND (m.anioSalidaRama IS NULL)";
        $result = $this->db->getData($query);
        return $result;
    }
}
