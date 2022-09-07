<?php

require_once('./ieee/models/OrganizationModel.php');

class OrganizationController {

    public static function index(){

        $organizationModel = new OrganizationModel();
        // en si todo se maneja con el apicontroller
        $comites = $organizationModel->getComites();
        $juntaDirectiva = $organizationModel->getJuntaDirectiva();
        $iconos = array('book', 'newspaper', 'calendar-clear', 'wallet', 'balloon');
        require_once('./ieee/views/organization.php');
    }
}

?>