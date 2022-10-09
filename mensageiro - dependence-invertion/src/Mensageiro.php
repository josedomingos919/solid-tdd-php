<?php

namespace src;

use src\Email;
use src\IMessageToken;

class Mensageiro
{
    private $canal;

    public function __construct(IMessageToken $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal(): IMessageToken
    {
        return $this->canal;
    }

    public function setCanal(IMessageToken $canal): void
    {
        $this->canal =  $canal;
    }

    public function enviarToken(): void
    {
        $this->getCanal()->enviar();

        // $class = '\src\\' . ucfirst($this->getCanal());

        // $obj = new $class();
        // $obj->enviar();
    }
}
