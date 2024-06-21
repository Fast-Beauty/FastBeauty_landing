<?php

require_once 'models/db.php';
class ProductsDetailsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarProductos() {
        $sql = $this->svc->query("select * from products"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    
    public function listarImagenProducto($id) {
        $sql = $this->svc->query("select * from products_images where productos_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }


}

?>
