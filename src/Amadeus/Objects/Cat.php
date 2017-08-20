<?php

namespace Amadeus\Objects;

use Core\Animals\Types\MammalsAbstract;

/**
 * Class Cat
 *
 * @package Amadeus\Objects
 */
class Cat extends MammalsAbstract
{
    public function speak() : string
    {
        return $this->getName() . ' meow';
    }
}