<?php

namespace Amadeus\Objects;

use Core\Animals\Types\BirdsAbstract;

/**
 * Class Sparrow
 *
 * @package Amadeus\Objects
 */
class Sparrow extends BirdsAbstract
{
    public function speak() : string
    {
        return $this->getName() . ' tweet';
    }
}