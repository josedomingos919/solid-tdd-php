<?php

namespace App;

class Item
{
    private $description;
    private $valor;

    public function __construct()
    {
        $this->description = '';
        $this->valor = 0;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function itemValido()
    {
        if ($this->description == '') {
            return false;
        }

        if ($this->valor <= 0) {
            return false;
        }

        return true;
    }
}
