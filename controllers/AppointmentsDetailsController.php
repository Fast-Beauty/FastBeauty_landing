<?php

require_once 'models/AppointmentsDetailsModel.php';

class AppointmentsDetailsController{
  private $modelosvc;

  public function __CONSTRUCT() {
    $this->modelosvc = new AppointmentsDetailsModel();
  }

  public function index(){
      require_once('views/components/layout/head.php');
      require_once('views/appointments_details/index.php');
      require_once('views/components/layout/footer.php');    
  }
}
?>