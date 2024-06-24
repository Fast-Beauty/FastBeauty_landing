<?php

class AppointmentsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarServicios() {
        $sql = $this->svc->query("select * from services"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    
    public function listarImagenServicio($id) {
        $sql = $this->svc->query("select * from services_images where services_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarEstilistas() {
        $sql = $this->svc->query("select * from employees"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarImagenEstilista($id) {
        $sql = $this->svc->query("select * from employees_images where employees_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data) {
        $stmt = $this->svc->prepare("INSERT INTO appointments (status, date, hora, clients_id, employees_id, services_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiii", $data['status'], $data['date'], $data['hora'], $data['clients_id'], $data['employees_id'], $data['services_id']);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }        
    }
}