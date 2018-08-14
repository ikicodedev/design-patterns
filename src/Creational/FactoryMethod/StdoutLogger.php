<?php

namespace Ikicode\DesignPatterns\Creational\FactoryMethod;

class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}