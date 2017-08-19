<?php

namespace Core\Animals\Traits;

/**
 * Trait BaseActionsTrait
 *
 * @package Core\Animals\Traits
 */
trait BaseActionsTrait
{
    public function eat(string $food) : string
    {
        return $this->name . ' eating ' . $food . PHP_EOL;
    }

    public function move(int $speed = 0) : string
    {
        if ($speed > 0) {
            return $this->name . ' move' . PHP_EOL;
        } else {
            return $this->name . ' stand' . PHP_EOL;
        }
    }

    public function speak() : string
    {
        return $this->name . ' speak' . PHP_EOL;
    }
}