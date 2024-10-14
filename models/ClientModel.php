<?php

class ClientModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarClientes($email) {
        $sql = $this->svc->query("SELECT clients.id , users.name FROM clients JOIN users ON clients.users_id = users.id WHERE users.email = '$email'"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    
}