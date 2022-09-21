<?php

require_once('./models/YearbookModel.php');

class YearbookController
{
    public static function index()
    {
        $anioInicio = 2002;
        $anioFinal = date("Y");
        $intervalo = 2;
        $img = 1;
        $cantidadAnios = $anioFinal - $anioInicio;

        require_once('./views/yearbook.php');
    }
}
