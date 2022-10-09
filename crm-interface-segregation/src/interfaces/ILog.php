<?php

namespace src\interfaces;

use src\componentes\Log;

interface ILog
{
    public function registrarLog(Log $log);
}
