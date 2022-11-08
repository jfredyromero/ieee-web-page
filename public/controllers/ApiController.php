<?php

require_once('./models/OrganizationModel.php');
require_once('./models/YearbookModel.php');

class ApiController
{
    public static function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $dominioApi = $GLOBALS["dominio"] . 'api/';
        $organizationModel = new OrganizationModel();
        $yearbookModel = new YearbookModel();

        $string2Analize = "get-comites";
        if (substr($url, strlen($dominioApi), strlen($string2Analize)) === $string2Analize) {
            $comite = urldecode(substr($url, strlen($dominioApi) + strlen($string2Analize) + 1));
            $url = substr($url, 0, strlen($dominioApi) + strlen($string2Analize));
        }

        $string2Analize = "get-miembros";
        if (substr($url, strlen($dominioApi), strlen($string2Analize)) === $string2Analize) {
            $intervalo = 4;
            $anio = urldecode(substr($url, strlen($dominioApi) + strlen($string2Analize) + 1));
            $url = substr($url, 0, strlen($dominioApi) + strlen($string2Analize));
        }

        $string2Analize = "get-one-miembro";
        if (substr($url, strlen($dominioApi), strlen($string2Analize)) === $string2Analize) {
            $id = urldecode(substr($url, strlen($dominioApi) + strlen($string2Analize) + 1));
            $url = substr($url, 0, strlen($dominioApi) + strlen($string2Analize));
        }

        switch ($url) {

                // Yearbook Model

            case $dominioApi . 'get-miembros':
                echo json_encode($yearbookModel->getMiembros($anio, $intervalo));
                break;

            case $dominioApi . 'get-one-miembro':
                echo json_encode($yearbookModel->getMiembro($id));
                break;

                // Organization Model

            case $dominioApi . 'get-junta-directiva':
                echo json_encode($organizationModel->getJuntaDirectiva());
                break;

            case $dominioApi . 'get-presidente':
                echo json_encode($organizationModel->getPresidente());
                break;

            case $dominioApi . 'get-vicepresidente':
                echo json_encode($organizationModel->getVicepresidente());
                break;

            case $dominioApi . 'get-fiscal':
                echo json_encode($organizationModel->getFiscal());
                break;

            case $dominioApi . 'get-tesorero':
                echo json_encode($organizationModel->getTesorero());
                break;

            case $dominioApi . 'get-secretario':
                echo json_encode($organizationModel->getSecretario());
                break;

            case $dominioApi . 'get-coordinadores':
                echo json_encode($organizationModel->getCoordinadores());
                break;

            case $dominioApi . 'get-subcoordinadores':
                echo json_encode($organizationModel->getSubCoordinadores());
                break;

            case $dominioApi . 'get-comites':
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
