<?php

class Inventario {
    private array $objetos;

    public function __construct (array $objetos = []) {
        $this->objetos = $objetos;
    }

    public function getObjetos(): array {
        return $this->objetos;
    }

    public function getObjeto(Objeto $objeto): Objeto {
        foreach($this->objetos as $obj) {
            if($obj == $objeto) {
                return $objeto;
            }    
        }
        return null;
}