<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:38
 */

require_once __DIR__ . '/vendor/autoload.php';

$actions = require __DIR__ . '/config/actions.php';
$characterWorldTypes = require __DIR__ . '/config/characters.php';
$characters = require __DIR__ . '/config/population.php';

$earth = new Funny\Worlds\Earth($characters, $actions, $characterWorldTypes);

$simulationResult = $earth->simulate();

echo implode('<br>', $simulationResult);