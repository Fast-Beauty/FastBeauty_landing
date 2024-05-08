<?php

class ProductController{
    public function product(){
        require_once('views/components/layout/head.php');
        require_once('views/product_details/product_details.php');
        require_once('views/components/layout/footer.php');    
    }
}
?>