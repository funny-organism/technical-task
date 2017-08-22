<?php

/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 23.08.2017
 * Time: 1:23
 */
class CharacterTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $actions = require __DIR__ . '/../config/actions.php';
        $characterWorldTypes = require __DIR__ . '/../config/characters.php';
        $characters = require __DIR__ . '/../config/population.php';

        $earth = new Funny\Worlds\Earth($characters, $actions, $characterWorldTypes);

        $actionType = 'moveable';
        $action = 'run';
        /** @var \Funny\Abstracts\CharacterAbstract $character */
        foreach ($earth->getCharacters() as $characters) {
            foreach ($characters as $type => $character) {
                if ($character->actionAllowed($actionType, $action)) {
                    $this->assertEquals($character->getName() . ' is swimming', $character->performAction($actionType, $action));
                } else {
                    $this->assertEquals("Action {$action} with type {$actionType} doesnt allowed for " . $character->getName(), $character->performAction($actionType, $action));
                }
            }
        }
    }
}