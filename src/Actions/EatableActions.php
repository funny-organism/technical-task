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

class EatableActions extends ActionAbstract
{
    private const ACTION_TYPE = 'eatable';

    public function getType() : string
    {
        return self::ACTION_TYPE;
    }

    public function eat(CharacterAbstract $character) : string
    {
        return $character->getName() . ' is eating';
    }

    public function drink(CharacterAbstract $character) : string
    {
        return $character->getName() . ' is drinking';
    }
}