<?php

namespace src;

class Email implements IMessageToken
{
    public function enviar()
    {
        echo "----- Seu token é E-mail-------";
    }
}
