<?php

require_once('./db/db.php');
require_once('./models/OrganizationModel.php');

class OrganizationController {

    public static function index(){

        $organizationModel = new OrganizationModel();
        $juntaDirectiva = $organizationModel->getJuntaDirectiva();

        require_once('./views/organization.php');
    }
}

?>