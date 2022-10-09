<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\INotification;
use src\BD;
use src\componentes\Nitificacao;

class LeadModel extends BD implements ICadastro, INotification
{
    public function salvar()
    {
    }

    public function enviarNotificacao(Nitificacao $notificacao)
    {
    }
}
