<?php

namespace Commands;

use Commands\HelloWorld;
use LegoCue\Framework\Kernel;

class Console extends Kernel
{
    protected $commands = [
        HelloWorld::class,
    ];
}
