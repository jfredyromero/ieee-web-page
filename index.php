<?php

//? Importamos los modelos requeridos

//? Importamos los controladores
require_once('./controllers/HomeController.php');
require_once('./controllers/NewsController.php');
require_once('./controllers/YearbookController.php');
require_once('./controllers/OrganizationController.php');
require_once('./controllers/GaleryController.php');
require_once('./controllers/NoPageFoundController.php');
require_once('./controllers/EventsController.php');

//? URL
$url = $_SERVER['REQUEST_URI'];
$dominio = '/ieee-web-page/';

switch ($url) {
    case $dominio:
        //echo 'Entro al case de la pagina principal';
        HomeController::index();
        break;

    case $dominio . 'noticias':
        //echo 'Entro al case de la pagina de noticias';
        NewsController::index();
        break;

    case $dominio . 'anuario':
        //echo 'Entro al case de la pagina de anuario';
        YearbookController::index();
        break;

    case $dominio . 'organizacion':
        //echo 'Entro al case de la pagina de organizacion';
        OrganizationController::index();
        break;

    case $dominio . 'eventos':
        //echo 'Entro al case de la pagina de eventos';
        EventsController::index();
        break;

    case $dominio . 'galeria':
        //echo 'Entro al case de la pagina de Galeria';
        GaleryController::index();
        break;

    default:
        http_response_code(404);
        NoPageFoundController::index();
        break;
}
