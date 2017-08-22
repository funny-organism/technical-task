<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:14
 */

namespace Funny\Actions;


use Funny\Abstracts\ActionAbstract;
use Funny\Abstracts\CharacterAbstract;

class MovableActions extends ActionAbstract
{
    private const ACTION_TYPE = 'movable';

    public function getType()
    {
        return self::ACTION_TYPE;
    }

    public function walk(CharacterAbstract $character)
    {
        return $character->getName() . ' is walking';
    }

    public function fly(CharacterAbstract $character)
    {
        return $character->getName() . ' is flying';
    }

    public function swim(CharacterAbstract $character)
    {
        return $character->getName() . ' is swimming';
    }
}