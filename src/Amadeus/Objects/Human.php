<?php

namespace Amadeus\Objects;

use Amadeus\Types\HumanAbstract;

/**
 * Class Human
 *
 * @package Amadeus\Objects
 */
class Human extends HumanAbstract
{
    public function speak() : string
    {
        return $this->getName() . ' word' . PHP_EOL;
    }
}