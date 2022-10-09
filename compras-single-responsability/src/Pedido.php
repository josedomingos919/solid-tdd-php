<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->valorPedido = 0;
        $this->carrinhoCompra = new CarrinhoCompra();
    }

    public function getCarrinhoCompra(): CarrinhoCompra
    {
        return $this->carrinhoCompra;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function confirmar(): bool
    {
        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('confirmado');

            return true;
        }

        $this->setStatus('erro');
        return false;
    }
}
