<?php

class ServicesController {
    public function index() {
        include "views/components/layout/head.php";
        include "views/services/index.php";
        include "views/components/layout/footer.php";
        echo "Hola";
    }
}