<?php

class ServiceModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarServices() {
        $sql = $this->svc->query("select * from services"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    // public function listarImages() {
    //     $sql = $this->svc->query("select * from services_images"); 
    //     $datos = $sql->fetch_all(MYSQLI_ASSOC);
    //     return $datos;
    // }
}