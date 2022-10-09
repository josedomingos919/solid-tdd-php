<?php

namespace App;

use App\Item;

class CarrinhoCompra
{

    //atributos
    private $itens;

    //métodos
    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function addItem(Item $item)
    {
        array_push($this->itens, $item);
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}
