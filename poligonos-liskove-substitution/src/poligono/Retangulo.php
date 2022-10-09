<?php

namespace src\poligono;

class Retangulo
{
    protected float $largura;
    protected float $altura;

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }
}
