<?php

namespace Core;

use Core\Animals\Types\AnimalsAbstract;

/**
 * Class FaunaAbstract
 *
 * @package Core
 */
abstract class FaunaAbstract
{
    protected $animals;

    abstract public function pushAnimal(AnimalsAbstract $animal);

    abstract public function removeAnimal(AnimalsAbstract $animal);

    abstract public function getAnimals(\Closure $callback = null);
}