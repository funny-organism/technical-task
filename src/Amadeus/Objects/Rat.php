<?php

namespace Amadeus\Objects;

use Core\Animals\Types\MammalsAbstract;

/**
 * Class Rat
 *
 * @package Amadeus\Objects
 */
class Rat extends MammalsAbstract
{
    public function speak() : string
    {
        return $this->getName() . ' pi' . PHP_EOL;
    }
}