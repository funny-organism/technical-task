<?php

namespace Amadeus\Objects;

use Core\Animals\Types\MammalsAbstract;

/**
 * Class Dog
 *
 * @package Amadeus\Objects
 */
class Dog extends MammalsAbstract
{
    public function move(int $speed = 0) : string
    {
        if ($speed > 10) {
            return $this->run();
        }

        return parent::move($speed);
    }

    protected function run() : string
    {
        return $this->name . ' run' . PHP_EOL;
    }

    public function speak() : string
    {
        return $this->name . ' wuf' . PHP_EOL;
    }
}