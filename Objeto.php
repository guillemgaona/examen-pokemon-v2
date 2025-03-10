<?php
require_once("Tipo.php");

class Objeto {
    private string $nombre;
    private Tipo $tipo;
    private int $cantidadMaxima;
    private int $cantidadActual;

    public function __construct(string $nombre, Tipo $tipo, int $cantidadMaxima, int $cantidadActual) {
        $this->nombre = $nombre;
        $this->Tipo = $tipo;
        $this->cantidadMaxima = $cantidadMaxima;
        $this->cantidadActual = $cantidadActual;
    }

    public function usarObjeto(string $nombre): string {
        if ($nombre )
    }
}