<?php

require __DIR__ . "/vendor/autoload.php";

use App\Item;
use App\Pedido;
use App\EmailService;
use App\CarrinhoCompra;

echo "Com SRP";

$pedido = new Pedido();
//----------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescription("Pasta");
$item1->setValor(100.89);

$item2->setDescription("Mala");
$item2->setValor(17.09);
//---------------------- 
echo "<hr />";
echo "<h4>Inicio</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//----------------------------
$pedido->getCarrinhoCompra()->addItem($item1);
$pedido->getCarrinhoCompra()->addItem($item2);
echo "<hr />";
echo "<h4>Adicionado itens</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Itens do carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Valor do pedido</h4>";
echo "<pre>";
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo "Total: " . $total;
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Carrinho valido ?</h4>";
echo "<pre>";
echo "Validar: " . $pedido->getCarrinhoCompra()->validarCarrinho();
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Status ?</h4>";
echo "<pre>";
echo "Validar: " . $pedido->getStatus();
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Confirmar ?</h4>";
echo "<pre>";
echo "Pedido: " . $pedido->confirmar();
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Status ?</h4>";
echo "<pre>";
echo "Validar: " . $pedido->getStatus();
echo "</pre>";
//----------------------------
echo "<hr />";
echo "<h4>Email ?</h4>";
echo "<pre>";
if ($pedido->getStatus() === 'confirmado')
    echo EmailService::enviarEmail();
else
    echo "Erro";

echo "</pre>";
