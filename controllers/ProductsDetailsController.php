<?php

require_once 'models/ProductsDetailsModel.php';

class ProductsDetailsController{

    private $modelosvc;

    public function __CONSTRUCT() {
    $this->modelosvc = new ProductsDetailsModel();
    }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/products_details/index.php');
        require_once('views/components/layout/footer.php');
    }

}

?>
