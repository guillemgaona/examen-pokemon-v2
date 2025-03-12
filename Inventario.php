<?php
require_once('Objeto.php');

class Inventario {
    private array $objetos;

    public function __construct (array $objetos = []) {
        $this->objetos = $objetos;
    }

    public function usarObjeto(string $nombre): string {
        foreach($this->objetos as $objeto) {
            if($objeto->getNombre() === $nombre) {
                if ($objeto->getCantidadActual() > 0) {
                    $objeto->setCantidadActual($objeto->getCantidadActual()-1);
                    return "Has usado: " . $objeto->getNombre() . " te quedan: " . $objeto->getCantidadActual() . " en el inventario"; 
                } else {
                    return "No te quedan" . $objeto->getNombre() . " en el inventario";
                }
                }
            }
            return "No tienes $nombre en el inventario";
        }

    public function fullInventario(): string {
        $fullObjetos =[];
        foreach($this->objetos as $objeto) {
            if($objeto->getCantidadActual() == $objeto->getCantidadMaxima()) {
                array_push($fullObjetos, $objeto);
            }
        }
        return "Los objetos que están a máxima capacidad son: " . implode(", ", $fullObjetos);
    }
}