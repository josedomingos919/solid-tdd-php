<?php
require __DIR__ . "/vendor/autoload.php";

use src\Poligono;
use src\poligono\Quadrado;
use src\poligono\Retangulo;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(5);
$poligono->getForma()->setAltura(50);

echo "<pre>";
print_r($poligono);
echo "<b>Área do quadrado: </b>" . $poligono->getArea();
echo "</pre>";
//------------------------------------------------------------
$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setAltura(50);

echo "<pre>";
print_r($poligono);
echo "<b>Área do quadrado: </b>" . $poligono->getArea();
echo "</pre>";

// $retangulo = new Retangulo();

// $retangulo->setAltura(3);
// $retangulo->setLargura(6);

// echo "Área do retângulo " . $retangulo->getArea() . " ";
// //---------------------------------------------------------
// $quadrado = new Quadrado();

// $quadrado->setAltura(2);
// $quadrado->setLargura(4);

// echo "Área do retângulo " . $quadrado->getArea() . " ";
