<?php
header('Access-Control-Allow-Origin: *');
//? Importamos los controladores
require_once('./ieee/controllers/HomeController.php');
require_once('./ieee/controllers/EventsController.php');
require_once('./ieee/controllers/TetController.php');
require_once('./ieee/controllers/YearbookController.php');
require_once('./ieee/controllers/OrganizationController.php');
require_once('./ieee/controllers/GaleryController.php');
require_once('./ieee/controllers/ApiController.php');
require_once('./ieee/controllers/NoPageFoundController.php');
// URL
$url = $_SERVER['REQUEST_URI'];
$dominio = '/ieee-web-page/'; // Para desarrollo
// $dominio = '/'; // Para producción

switch ($url) {
    case $dominio:
        HomeController::index();
        break;

    case $dominio . 'eventos':
        EventsController::index();
        break;

    case $dominio . 'tet':
        TetController::index();
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
