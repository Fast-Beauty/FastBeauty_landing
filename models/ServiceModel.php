<?php
class ServiceModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {
        $sql = $this->svc->query("select * from services"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    public function listarImagen($id) {
        $sql = $this->svc->query("select * from services_images where services_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
}