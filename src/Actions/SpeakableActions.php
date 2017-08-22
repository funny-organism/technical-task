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

class SpeakableActions extends ActionAbstract
{
    private const ACTION_TYPE = 'speakable';

    public function getType() : string
    {
        return self::ACTION_TYPE;
    }

    public function speak(CharacterAbstract $character) : string
    {
        return $character->getName() . ' is speaking';
    }
}