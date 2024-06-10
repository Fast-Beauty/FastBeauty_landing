<?php

class productsController{
    public function products(){
        require_once('views/components/layout/head.php');
        require_once('views/products/products.php');
        require_once('views/components/layout/footer.php');    
    }
}
?>