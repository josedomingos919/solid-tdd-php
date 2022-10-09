<?php

namespace src\interfaces;

use src\componentes\Nitificacao;

interface INotification
{
    public function enviarNotificacao(Nitificacao $notificacao);
}
