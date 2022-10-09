<?php

namespace src;

class Leitor
{
    private string $diretorio;
    private string $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo($arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
    {
        $caminho   = $this->getDiretorio() . '/' . $this->getArquivo();
        $extencao  = explode('.', $this->getArquivo());
        $classe    = "\\src\\extrator\\" . ucfirst($extencao[1]);


        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );
    }
}
