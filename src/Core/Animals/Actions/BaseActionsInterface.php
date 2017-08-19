<?php

namespace Core\Animals\Actions;

/**
 * Interface BaseActionsInterface
 *
 * @package Core\Animals\Actions
 */
interface BaseActionsInterface
{
    public function eat(string $food);

    public function move(int $speed = 0);

    public function speak();
}