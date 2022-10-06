<?php

require_once('./models/OrganizationModel.php');

class OrganizationController
{
    public static function index()
    {
        $organizationModel = new OrganizationModel();
        $comites = $organizationModel->getComites();
        $comiteAcademico = $organizationModel->getComiteByNombre('académico');
        $juntaDirectiva = $organizationModel->getJuntaDirectiva();
        $iconos = array('book-open', 'table-tennis-paddle-ball', 'calendar', 'wallet', 'newspaper');
        require_once('./views/organization.php');
    }
}
