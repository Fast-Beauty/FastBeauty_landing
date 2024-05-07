<?php

require_once 'models/AppointmentsModel.php';

class AppointmentsController{

    private $modelosvc;

    // public function __CONSTRUCT() {
    //     $this->modelosvc = new AppointmentsModel();
    // }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/Appointments/index.php');
        require_once('views/components/layout/footer.php');
    }
}

?>