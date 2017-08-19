<?php

namespace Core\Animals\Types;

use Core\Animals\Actions\BaseActionsInterface;
use Core\Animals\Traits\BaseActionsTrait;

/**
 * Class AnimalsAbstract
 *
 * @package Core\Animals\Types
 */
abstract class AnimalsAbstract implements BaseActionsInterface
{
    use BaseActionsTrait;

    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}