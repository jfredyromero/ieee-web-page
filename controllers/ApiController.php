<?php

require_once('./models/OrganizationModel.php');

class ApiController
{
    public static function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $dominio = '/ieee-web-page/api/';
        $organizationModel = new OrganizationModel();
        $yearbookModel = new YearbookModel();

        if (substr($url, 19, 11) === "get-comites") {
            $comite = urldecode(substr($url, 31));
            $url = substr($url, 0, 30);
        }

        if (substr($url, 19, 12) === "get-miembros") {
            $intervalo = 4;
            $anio = urldecode(substr($url, 32));
            $url = substr($url, 0, 31);
        }

        switch ($url) {

                // Yearbook Model

            case $dominio . 'get-miembros':
                echo json_encode($yearbookModel->getMiembros($anio, $intervalo));
                break;

                // Organization Model

            case $dominio . 'get-junta-directiva':
                echo json_encode($organizationModel->getJuntaDirectiva());
                break;

            case $dominio . 'get-presidente':
                echo json_encode($organizationModel->getPresidente());
                break;

            case $dominio . 'get-vicepresidente':
                echo json_encode($organizationModel->getVicepresidente());
                break;

            case $dominio . 'get-fiscal':
                echo json_encode($organizationModel->getFiscal());
                break;

            case $dominio . 'get-tesorero':
                echo json_encode($organizationModel->getTesorero());
                break;

            case $dominio . 'get-secretario':
                echo json_encode($organizationModel->getSecretario());
                break;

            case $dominio . 'get-coordinadores':
                echo json_encode($organizationModel->getCoordinadores());
                break;

            case $dominio . 'get-subcoordinadores':
                echo json_encode($organizationModel->getSubCoordinadores());
                break;

            case $dominio . 'get-comites':
                if ($comite) {
                    echo json_encode($organizationModel->getComiteByNombre($comite));
                } else {
                    echo json_encode($organizationModel->getComites());
                }
                break;

            default:
                NoPageFoundController::index();
                break;
        }
    }
}
