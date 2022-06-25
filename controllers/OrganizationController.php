<?php

require_once('./models/OrganizationModel.php');

class OrganizationController {

    public static function index(){

        $organizationModel = new OrganizationModel();

        $juntaDirectiva = $organizationModel->getJuntaDirectiva();
        $coordinadores = $organizationModel->getCoordinadores();
        $subcoordinadores = $organizationModel->getSubCoordinadores();
        $comites = $organizationModel->getComites();
        require_once('./views/organization.php');
    }
}

?>