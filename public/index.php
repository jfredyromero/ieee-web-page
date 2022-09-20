<?php
// Para evitar error de CORS
// header('Access-Control-Allow-Origin: *');
// Importamos los helpers
require_once('./helpers.php');
// Importamos los controladores
require_once('./controllers/HomeController.php');
require_once('./controllers/EventsController.php');
require_once('./controllers/TetController.php');
require_once('./controllers/YearbookController.php');
// require_once('./controllers/OrganizationController.php');
// require_once('./controllers/GaleryController.php');
require_once('./controllers/ApiController.php');
require_once('./controllers/NoPageFoundController.php');
// URL
$url = $_SERVER['REQUEST_URI'];
if (getenv('PROD') == 'true') {
    $dominio = getenv('PROD_DOMAIN'); // Para producción
} else {
    $dominio = getenv('DEV_DOMAIN'); // Para desarrollo
}
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

        // case $dominio . 'organizacion':
        //     OrganizationController::index();
        //     break;

        // case $dominio . 'galeria':
        //     GaleryController::index();
        //     break;

    default:
        ApiController::index();
        break;
}
