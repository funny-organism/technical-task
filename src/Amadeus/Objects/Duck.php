<?php

namespace Amadeus\Objects;

use Amadeus\Types\DuckAbstract;

/**
 * Class Duck
 *
 * @package Amadeus\Objects
 */
class Duck extends DuckAbstract
{
    public function speak() : string
    {
        return $this->getName() . ' crya' . PHP_EOL;
    }
}