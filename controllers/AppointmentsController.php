<?php

require_once 'models/AppointmentsModel.php';

class AppointmentsController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new AppointmentsModel();
    }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/Appointments/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function create() {
        $data = json_decode(file_get_contents('php://input'), true);
        $result = $this->modelosvc->insert($data);
    
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }    
    }
}

?>