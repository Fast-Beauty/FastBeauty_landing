<?php

require_once 'models/ProductsModel.php';

class ProductsController
{

    private $modelosvc;

    public function __CONSTRUCT()
    {
        $this->modelosvc = new ProductsModel();
    }

    public function products()
    {
        require_once('views/components/layout/head.php');
        require_once('views/products/products.php');
        // require_once('views/components/sidebar.php');
        require_once('views/components/layout/footer.php');
    }
}
