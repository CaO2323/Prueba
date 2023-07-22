<?php 

require  "Producto.php";
require "TicketCompra.php";



$producto1 = new Producto("jamon", 15.90, 1, "Guijuelo", Tipo::ALIMENTACION);
$producto2 = new Producto("champu nutritivo", 10.95, 1, "Herbal Essences", Tipo::HIGIENE);
$producto3 = new Producto("pasta de dientes", 3.50, 1, "Oral B", Tipo::HIGIENE);
$producto4 = new Producto("desodorante unisex", 4.50, 2, "Sanex", Tipo::HIGIENE);
$producto5 = new Producto("gel exfoliante", 2.50, 2, "Garnier", Tipo::HIGIENE);
$producto6 = new Producto("discos desmaquillantes", 2.29, 2, "Algodon", Tipo::HIGIENE);
$producto7 = new Producto("pilas alcalinas", 5.95, 1, "Energizer", Tipo::OTROS);
$producto8 = new Producto("boligrafo", 1.50, 2, "Bic", Tipo::OTROS);

$productos = [$producto1,  $producto3,$producto4, $producto5, $producto6, $producto7, $producto8];
$ticket = new TicketCompra ($productos);

$ticket-> agregarProducto($producto1);
$ticket-> agregarProducto($producto2);
$ticket-> agregarProducto($producto3);
$ticket-> agregarProducto($producto4);
$ticket-> agregarProducto($producto5);
$ticket-> agregarProducto($producto6);
$ticket-> agregarProducto($producto7);
$ticket-> agregarProducto($producto8);


$precioTotal = $ticket-> obtenerPrecioTotal();

$productosCarosHigiene = $ticket-> obtenerProductosMasCaros(Tipo::HIGIENE);
echo "El precio total de la compra es de " . $precioTotal . " €" . "<br>";

if(!empty($productosCarosHigiene)){
    echo "Productos de higiene que valen más de 3€: " . "<br>";
    
    foreach($productosCarosHigiene as $producto){
        echo "-" . $producto-> getNombre() . " precio : " . $producto-> getPrecio() . " €" . "<br>";
    }
 }else{
     echo "No hay productos de higiene que valgan más de 3€." . "<br>";
 } 



?>