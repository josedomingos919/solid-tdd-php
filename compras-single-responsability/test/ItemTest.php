<?php

use App\Item;
use PHPUnit\Framework\TestCase;

//* assertions test *

class ItemTest extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetAndSetDescription()
    {
        $descricao = "Cadeira de descrição";
        $item = new Item();

        $item->setDescription($descricao);

        $this->assertEquals($descricao, $item->getDescription());
    }

    public function testItemValido()
    {
        $item = new Item();

        //------------------------------------- true

        $item->setValor(45.4);
        $item->setDescription('Pasta parda');
        $this->assertEquals(true, $item->itemValido());

        //------------------------------------- false (description)

        $item->setValor(55.63);
        $item->setDescription('');
        $this->assertEquals(false, $item->itemValido());

        //------------------------------------- false (value)

        $item->setValor(0);
        $item->setDescription('Pasta prada');
        $this->assertEquals(false, $item->itemValido());

        //------------------------------------- false 

        $item->setValor(0);
        $item->setDescription('');
        $this->assertEquals(false, $item->itemValido());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetAndSetValue($valor)
    {
        $item  = new Item();

        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores()
    {
        return [
            [100],
            [-2],
            [0],
            [3894.4]
        ];
    }
}
