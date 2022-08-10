<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Origin: *');

//? Importamos los controladores
require_once('./controllers/HomeController.php');
require_once('./controllers/EventsController.php');
require_once('./controllers/NewsController.php');
require_once('./controllers/YearbookController.php');
require_once('./controllers/OrganizationController.php');
require_once('./controllers/GaleryController.php');
require_once('./controllers/ApiController.php');

// URL
$url = $_SERVER['REQUEST_URI'];
$dominio = '/ieee-web-page/';

switch ($url) {
    case $dominio:
        HomeController::index();
        break;

    case $dominio . 'eventos':
        EventsController::index();
        break;

    case $dominio . 'noticias':
        NewsController::index();
        break;

    case $dominio . 'anuario':
        YearbookController::index();
        break;

    case $dominio . 'organizacion':
        OrganizationController::index();
        break;

    case $dominio . 'galeria':
        GaleryController::index();
        break;

    default:
        ApiController::index();
        break;
}
