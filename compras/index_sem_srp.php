<?php

require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;


$carrinho1 = new CarrinhoCompra();

echo "<pre>";

print_r($carrinho1->exibirItens());
echo "Valor total: " . $carrinho1->exibirValorTotal();
echo "<br />";
echo "Valor status: " . $carrinho1->exibiStatus();
echo "<br />";

// $carrinho1->adicionarItem('Bisicleta', 750.10);
// $carrinho1->adicionarItem('Geladeira', 100.5);
// $carrinho1->adicionarItem('Tapete', 250.24);

echo "<hr />";
$carrinho1->adicionarItem('Tv', 750.10);

if ($carrinho1->confirmarPedido()) {
    echo "Pedido realizado com sucesso!";
} else {
    echo "Erro, carrinho sem itens!";
}

print_r($carrinho1->exibirItens());
echo "Valor total recalculado: " . $carrinho1->exibirValorTotal();
echo "<br />";
echo "Valor status: " . $carrinho1->exibiStatus();
echo "<br />";
echo "</pre>";
