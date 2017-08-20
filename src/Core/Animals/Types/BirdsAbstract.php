<?php

namespace Core\Animals\Types;

use Core\Animals\Actions\FlyableInterface;

/**
 * Class BirdsAbstract
 *
 * @package Core\Animals\Types
 */
abstract class BirdsAbstract extends AnimalsAbstract implements FlyableInterface
{
    public function fly() : string
    {
        return $this->name . ' fly';
    }
}