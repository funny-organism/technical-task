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

class AttackableActions extends ActionAbstract
{
    private const ACTION_TYPE = 'attackable';

    public function getType()
    {
        return self::ACTION_TYPE;
    }

    public function bite(CharacterAbstract $character)
    {
        return $character->getName() . ' bite someone';
    }

    public function cast(CharacterAbstract $character)
    {
        return $character->getName() . ' cast some magic on someone';
    }

    public function shoot(CharacterAbstract $character)
    {
        return $character->getName() . ' shoots in someone';
    }
}