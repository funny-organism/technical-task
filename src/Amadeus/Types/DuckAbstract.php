<?php

namespace Amadeus\Types;

use Amadeus\Actions\SwimableInterface;
use Core\Animals\Types\MammalsAbstract;

/**
 * Class DuckAbstract
 *
 * @package Amadeus\Types
 */
abstract class DuckAbstract extends MammalsAbstract implements SwimableInterface
{
    public function swim() : string
    {
        return $this->name . ' swim';
    }

}