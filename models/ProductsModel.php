<?php

require_once 'models/db.php';

class ProductsModel
{
    private $svc;

    public function __CONSTRUCT()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        $sql = $this->svc->query("select * from products");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function listarImagen($id)
    {
        $sql = $this->svc->query("select * from products_images where productos_id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function obtenerMark($id)
    {
        $sql = $this->svc->query("select * from mark where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
}
