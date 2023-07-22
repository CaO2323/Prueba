<?php 
require "Tipo.php";
class Producto  {

    private string $nombre;
    private float $precio;
    private int $cantidad;
    private string $marca;
    private Tipo $tipo;



    public function __construct(string $nombre, float $precio,int $cantidad, string $marca, Tipo $tipo)
    {
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this-> cantidad = $cantidad;
        $this-> marca = $marca;
        $this-> tipo = $tipo;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio() 
    {
        return $this->precio;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function getTipo(){
        return $this->tipo;
    }
}










?>