<?php

//? Importamos los modelos requeridos

//? Importamos los controladores
require_once('./controllers/HomeController.php');
require_once('./controllers/NewsController.php');
require_once('./controllers/YearbookController.php');
require_once('./controllers/OrganizationController.php');
require_once('./controllers/GaleryController.php');
require_once('./controllers/NoPageFoundController.php');

// URL
$url = $_SERVER['REQUEST_URI'];
$dominio = '/ieee-web-page/';

switch ($url) {
    case $dominio:
        HomeController::index();
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
        NoPageFoundController::index();
        break;
}
