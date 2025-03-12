<?php
require_once('Inventario.php');

$objetos = [
    new Objeto("Pocion", Tipo:: pocion, 100, 15),
    new Objeto("Baya azul", Tipo:: baya, 50, 50),
    new Objeto("Corte", Tipo:: MO, 1, 1),
    new Objeto("Clave", Tipo:: clave, 10, 0)
];

$inventario1 = new Inventario($objetos);

echo $inventario1->usarObjeto("Pocion") . PHP_EOL;
echo $inventario1->fullInventario();
