<?php

namespace Core\Animals\Actions;

use Core\Animals\Types\AnimalsAbstract;

/**
 * Interface BiteableInterface
 *
 * @package Core\Animals\Actions
 */
interface BiteableInterface
{
    public function bite(AnimalsAbstract $victim);
}