<?php

namespace src;

class Poligono
{
    private $forma;

    public function setForma(object $object): void
    {
        $this->forma =  $object;
    }

    public function getForma(): object
    {
        return $this->forma;
    }

    public function getArea()
    {
        return $this->getForma()->getLargura() *  $this->getForma()->getAltura();
    }
}
