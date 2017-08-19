<?php

namespace Amadeus;

use Amadeus\Objects\Cat;
use Amadeus\Objects\Dog;
use Amadeus\Objects\Duck;
use Amadeus\Objects\Human;
use Amadeus\Objects\Rat;
use Amadeus\Objects\Sparrow;
use Core\Animals\Types\AnimalsAbstract;
use Core\FaunaAbstract;

/**
 * Class Fauna
 *
 * @package Amadeus
 */
class Fauna extends FaunaAbstract
{

    public function __construct()
    {
        $this->initialize();
    }

    protected function initialize()
    {
        $animals = [
            new Dog('Alfred'),
            new Cat('Garfield'),
            new Duck('Flipper'),
            new Human('Serhii'),
            new Rat('Ratatui'),
            new Sparrow('Sparrow')
        ];

        foreach ($animals as $animal) {
            $this->pushAnimal($animal);
        }
    }

    public function pushAnimal(AnimalsAbstract $animal) : void
    {
        $hash = spl_object_hash($animal);

        $this->animals[$hash] = $animal;
    }

    public function removeAnimal(AnimalsAbstract $animal) : void
    {
        $hash = spl_object_hash($animal);

        unset($this->animals[$hash]);
    }

    /**
     * @param \Closure|null $callback
     *
     * @return AnimalsAbstract[] | null
     */
    public function getAnimals(\Closure $callback = null)
    {
        if (is_callable($callback)) {
            return $callback($this->animals);
        }

        return $this->animals;
    }

}