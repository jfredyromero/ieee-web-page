<?php

require_once('./models/OrganizationModel.php');

class ApiController
{
    public static function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $dominio = '/ieee-web-page/api/';

        if(substr( $url, 0, 4 ) === "http"){

        }

        switch ($url) {
            case $dominio . 'get-junta-directiva':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getJuntaDirectiva());
                break;

            case $dominio . 'get-presidente':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getPresidente());
                break;

            case $dominio . 'get-vicepresidente':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getVicepresidente());
                break;

            case $dominio . 'get-fiscal':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getFiscal());
                break;

            case $dominio . 'get-tesorero':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getTesorero());
                break;

            case $dominio . 'get-secretario':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getSecretario());
                break;

            case $dominio . 'get-coordinadores':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getCoordinadores());
                break;

            case $dominio . 'get-subcoordinadores':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getSubCoordinadores());
                break;

            case $dominio . 'get-comites':
                $organizationModel = new OrganizationModel();
                echo json_encode($organizationModel->getComites());
                break;
            
            default:
                NoPageFoundController::index();
                break;
        }
    }
}
