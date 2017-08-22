<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:03
 */

namespace Funny\Characters;


use Funny\Abstracts\CharacterAbstract;
use Funny\Abstracts\WorldAbstract;

class EarthCharacter extends CharacterAbstract
{
    /** @var string  */
    private $type;
    /** @var array */
    private $actions;
    /** @var string|null  */
    private $name;
    /** @var string */
    private $id;
    /** @var WorldAbstract */
    private $owner;

    public function __construct(string $type, array $config, WorldAbstract $owner)
    {
        $this->id = uniqid('', true);
        $this->type = $type;
        $this->name = isset($config['name']) ? $config['name'] : null;
        $this->owner = $owner;

        $actions = isset($config['actions']) ? $config['actions'] : null;

        if (is_array($actions)) {
            foreach ($actions as $key => $action) {
                if ($this->owner->hasAction($key)) {
                    $this->actions[$key] = $action;
                }
            }
        }
    }

    public function performAction(string $actionType, string $action)
    {
        if (
            $this->owner->hasAction($actionType) &&
            $this->hasAction($actionType) &&
            $this->actionAllowed($actionType, $action)
        ) {
            $actionType = $this->owner->getAction($actionType);

            return $actionType->$action($this);
        }

        return "Action {$action} with type {$actionType} doesnt allowed for " . $this->getName();
    }

    public function getRandomAction() : array
    {
        $actionsTypes = array_keys($this->actions);
        shuffle($actionsTypes);
        $randomType = array_pop($actionsTypes);
        $actions = $this->actions[$randomType];
        shuffle($actions);
        $randomAction = array_shift($actions);

        return [$randomType, $randomAction];
    }

    protected function hasAction(string $actionType) : bool
    {
        return isset($this->actions[$actionType]);
    }

    public function actionAllowed(string $actionType, string $action) : bool
    {
        return $this->hasAction($actionType) && in_array($action, $this->actions[$actionType]);
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function addAction(string $actionType, string $action)
    {
        if ($this->hasAction($actionType)) {
            if (!in_array($action, $this->actions[$actionType])) {
                $this->actions[$actionType][] = $action;
            }
        } else {
            $this->actions[$actionType][] = $action;
        }
    }

    public function removeAction(string $actionType, string $action)
    {
        if ($this->hasAction($actionType)) {
            $flippedActions = array_flip($this->actions[$actionType]);
            if (isset($flippedActions[$action])) {
                $actionIndex = $flippedActions[$action];
                unset($this->actions[$actionType][$actionIndex]);
            }
        }
    }


}