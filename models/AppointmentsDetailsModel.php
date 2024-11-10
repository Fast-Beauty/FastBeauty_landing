<?php

class AppointmentsDetailsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarCitas($id) {
        $sql = $this->svc->query("select * from appointments where appointments.clients_id=$id"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    
    public function listarImagenServicio($id) {
        $sql = $this->svc->query("select * from services_images where services_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarNombreServicio($id) {
        $sql = $this->svc->query("select * from services where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarImagenEstilista($id) {
        $sql = $this->svc->query("select * from employees_images where employees_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
}