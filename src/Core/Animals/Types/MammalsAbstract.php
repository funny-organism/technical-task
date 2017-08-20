<?php

namespace Core\Animals\Types;

use Core\Animals\Actions\BiteableInterface;

/**
 * Class MammalsAbstract
 *
 * @package Core\Animals\Types
 */
abstract class MammalsAbstract extends AnimalsAbstract implements BiteableInterface
{
    public function bite(AnimalsAbstract $victim) : string
    {
        return $this->name . ' bites ' . $victim->getName();
    }

}