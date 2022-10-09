<?php

namespace src\extrator;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        //logica xlsx

        return $this->getDados();
    }
}
