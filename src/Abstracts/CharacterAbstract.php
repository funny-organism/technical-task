<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:05
 */

namespace Funny\Abstracts;


abstract class CharacterAbstract
{
    abstract public function performAction(string $actionType, string $action);

    abstract protected function hasAction(string $actionType) : bool;

    abstract public function actionAllowed(string $actionType, string $action) : bool;

    abstract public function getName() : string ;

    abstract public function getId() : string ;

    abstract public function getType() : string ;

    abstract public function getRandomAction() : array ;

    abstract public function addAction(string $actionType, string $action);

    abstract public function removeAction(string $actionType, string $action);
}