<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:05
 */

namespace Funny\Abstracts;


abstract class WorldAbstract
{
    abstract public function getCharacters(callable $callback = null) : array ;

    abstract public function getActions() : array ;

    abstract public function getAction(string $actionType) : ActionAbstract;

    abstract public function hasAction(string $actionType) : bool;

}