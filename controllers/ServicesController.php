<?php

require_once 'models/ServiceModel.php';

class ServicesController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ServiceModel();
    }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/services/index.php');
        require_once('views/components/layout/footer.php');
    }
}

?>