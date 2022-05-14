<?php

class OrganizationModel{
    
    public function __construct(){

    }

    public function getJuntaDirectiva(){
        $query = "SELECT * FROM miembros WHERE (estado = 1 AND junta = true) ORDER BY id ASC";
    } 
    
}