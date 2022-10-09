<?php

namespace App;

class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(
        string $de = 'contacto@gmail.com',
        string $para = '',
        string $assunto = '',
        string $conteudo = ''
    ) {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }


    public static function enviarEmail()
    {
        return "--- enviar email ---";
    }
}
