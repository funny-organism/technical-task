<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:05
 */

namespace Funny\Abstracts;


abstract class ActionAbstract
{
    public function __call($name, $arguments)
    {
        $character = array_pop($arguments);

        if ($character instanceof CharacterAbstract) {
            return $character->getName() . ' cannot do action ' . $name;
        }

        throw new \Exception(get_class($character) . " isnt appropriate object. Object must be instance of " . CharacterAbstract::class);
    }

    abstract public function getType() : string ;
}