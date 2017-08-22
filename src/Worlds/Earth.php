<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:02
 */

namespace Funny\Worlds;


use Funny\Abstracts\ActionAbstract;
use Funny\Abstracts\CharacterAbstract;
use Funny\Abstracts\WorldAbstract;
use Funny\Factory\ActionFactory;
use Funny\Factory\CharacterFactory;

class Earth extends WorldAbstract
{

    private $characters;

    private $actions;

    private $worldTypes;

    public function __construct(array $characters, array $actions, array $characterWorldTypes)
    {
        $this->worldTypes = $characterWorldTypes;

        $actionFactory = new ActionFactory($actions);
        $this->actions = $actionFactory->createActions();

        $charFactory = new CharacterFactory($characterWorldTypes);
        $this->characters = $charFactory->createCharacters($characters, $this);
    }

    public function getCharacters(callable $callback = null) : array
    {
        if (is_callable($callback)) {
            return $callback($this->characters);
        }

        return $this->characters;
    }

    public function getActions() : array
    {
        return $this->actions;
    }

    public function getAction(string $actionType) : ActionAbstract
    {
        if (isset($this->actions[$actionType])) {
            return $this->actions[$actionType];
        }

        throw new \Exception("Action's type {$actionType} doesnt available in " . get_class($this));
    }

    public function hasAction(string $actionType) : bool
    {
        return isset($this->actions[$actionType]);
    }

    public function simulate()
    {
        $result = [];
        foreach ($this->getCharacters() as $type => $characters) {
            foreach ($characters as $character) {
                /** @var CharacterAbstract $character */
                /** @var ActionAbstract $action */
                [$randomActionType, $randomAction] = $character->getRandomAction();
                $randomValue = mt_rand(-1, 2);
                if ($randomValue == 1) {
                    $character->addAction('attackable', 'cast');
                    $result[] = $character->performAction('attackable', 'cast');
                } elseif ($randomValue == -1) {
                    $character->removeAction('movable', 'walk');
                    $result[] = $character->performAction('movable', 'walk');
                } else {
                    $result[] = $character->performAction($randomActionType, $randomAction);
                }
            }
        }

        return $result;
    }
}