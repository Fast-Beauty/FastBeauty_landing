<?php

require_once 'models/db.php';
class ProductsDetailsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listarProductos() {
        $sql = $this->svc->query("SELECT * FROM products "); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarProductosPorId($id) {
        $sql = $this->svc->query("SELECT * FROM products WHERE productos = 3"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
    
    // public function listarImagenProducto($id) {
    //     $sql = $this->svc->query("SELECT * from products_images where productos_id=$id");
    //     $datos = $sql->fetch_all(MYSQLI_ASSOC);
    //     return $datos;
    // }

    


    // public function obtenerId($id) {
    //     $sql = $this->svc->query("SELECT * from products_images where id=$id");
    //     $datos = $sql->fetch_all(MYSQLI_ASSOC);
    //     return $datos;
    // }

    

    // public function listarProductos($id) {
    //     $stmt = $this->svc->prepare("SELECT * FROM products WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $datos = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    //     $stmt->close();
    //     return $datos;
    // }

    
    public function listarImagenProducto($id) {
        $stmt = $this->svc->prepare("SELECT * FROM products_images WHERE productos_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $datos = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $datos;
    }

    public function obtenerId($id) {
        $stmt = $this->svc->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $datos = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $datos;
    }



}

?>
