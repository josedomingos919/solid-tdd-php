<?php

namespace src;

class Sms implements IMessageToken
{
    public function enviar()
    {
        echo "----- Seu token é SMS -------";
    }
}
