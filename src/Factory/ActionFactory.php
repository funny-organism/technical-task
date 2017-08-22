<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:03
 */

namespace Funny\Factory;


use Funny\Abstracts\ActionAbstract;
use Funny\Actions\AttackableActions;
use Funny\Actions\EatableActions;
use Funny\Actions\MovableActions;
use Funny\Actions\SpeakableActions;

class ActionFactory
{
    protected $actionTypes;

    public function __construct(array $actionTypes)
    {
        $this->actionTypes = $actionTypes;
    }

    public function createActions() : array
    {
        $createdActions = [];
        foreach ($this->actionTypes as $type => $actions) {
            $createdActions[$type] = $this->createAction($type);
        }

        return $createdActions;
    }

    public function createAction($type) : ActionAbstract
    {
        if (isset($this->actionTypes[$type])) {
            $className = $this->actionTypes[$type];

            return new $className();
        }

        throw new \Exception("Action's type {$type} doesnt exists");
    }
}