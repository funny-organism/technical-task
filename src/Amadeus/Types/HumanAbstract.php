<?php

namespace Amadeus\Types;

use Amadeus\Actions\WorkableInterface;
use Core\Animals\Types\MammalsAbstract;

/**
 * Class HumanAbstract
 *
 * @package Amadeus\Types
 */
abstract class HumanAbstract extends MammalsAbstract implements WorkableInterface
{
    public function work() : string
    {
        return $this->name . ' work' . PHP_EOL;
    }
}