<?php

require_once 'models/ClientModel.php';

class ClientController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ClientModel();
    }

    public function listar(){  
        $email = isset($_GET['email']) ? $_GET['email'] : null;
        $result = $this->modelosvc->listarClientes($email);
        echo json_encode($result);
    }
    
}

?>