<?php

use App\Kernel;

//Modif sur series de base

//Modif dans seriesSyl
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
