<?php

class LandingController{
    public function landing(){
        require_once('views/components/layout/head.php');
        require_once('views/landing_page/landing_page.php');
        require_once('views/components/layout/footer.php');    
    }
}
?>