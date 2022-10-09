<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotification;
use src\BD;
use src\componentes\Log;
use src\componentes\Nitificacao;

class UsuarioModel extends BD implements ICadastro, INotification, ILog
{
    public function salvar()
    {
    }

    public function registrarLog(Log $log)
    {
    }

    public function enviarNotificacao(Nitificacao $notificacao)
    {
    }
}
