<?php

require_once('./models/YearbookModel.php');

class YearbookController
{
    public static function index()
    {
        $anioInicio = 1986;
        $anioFinal = date("Y");
        $intervalo = 4;
        $img = 1;
        $cantidadAnios = $anioFinal - $anioInicio;

        require_once('./views/yearbook.php');
    }
}
