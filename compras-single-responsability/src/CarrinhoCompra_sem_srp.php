<?php

namespace App;

class CarrinhoCompra
{

    //atributos
    private $itens;
    private $status;
    private $valorTotal;

    //métodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(): array
    {
        return $this->itens;
    }

    public function adicionarItem(string $tiem, float $valor): bool
    {
        array_push($this->itens, [
            "item" => $tiem,
            'valor' => $valor
        ]);

        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function exibiStatus(): string
    {
        return $this->status;
    }

    public function confirmarPedido(): bool
    {
        if ($this->validarCarrinho()) {
            $this->status = 'confirmado';
            $this->enviarEmail();

            return true;
        }

        return false;
    }

    public function enviarEmail()
    {
        echo "<br />...E-mail enviado com sucesso!<br />";
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}
