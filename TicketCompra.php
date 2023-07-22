<?php 


class TicketCompra {

    protected array $productos; 

    public function __construct(array $productos)
    {
        $this-> productos = array();
    }
    public function agregarProducto($producto)
    {
        $this-> productos[] = $producto;
    }

    public function obtenerPrecioTotal(){
        $precioTotal = 0;

        foreach($this-> productos as $producto){
            $precioTotal += ($producto->getPrecio() * $producto->getCantidad());
        }
        return $precioTotal;
    }
    public function obtenerProductosMasCaros(Tipo $tipo)
    {
        $productosCaros = array();
    
        foreach($this-> productos as $producto) {

            if($producto->getTipo() === $tipo && $producto->getprecio() > 3){
                $productosCaros[] = $producto;
            }
        }
        return $productosCaros;
    }

}






?>