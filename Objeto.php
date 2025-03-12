<?php
require_once("Tipo.php");

class Objeto {
    private string $nombre;
    private Tipo $tipo;
    private int $cantidadMaxima;
    private int $cantidadActual;

    public function __construct(string $nombre, Tipo $tipo, int $cantidadMaxima, int $cantidadActual) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->cantidadMaxima = $cantidadMaxima;
        $this->cantidadActual = $cantidadActual;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCantidadActual() : int {
        return $this->cantidadActual;
    }

    public function setCantidadActual(int $cantidadActual): void {
        $this->cantidadActual = $cantidadActual;
    }

    public function getCantidadMaxima(): int {
        return $this->cantidadMaxima;
    }

    public function __toString(){
        return $this->nombre;
    }

}