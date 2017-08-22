<?php
/**
 * Created by PhpStorm
 * User: Sergey
 * Date: 22.08.2017
 * Time: 22:04
 */

namespace Funny\Factory;


use Funny\Abstracts\CharacterAbstract;
use Funny\Abstracts\WorldAbstract;

class CharacterFactory
{
    protected $worldTypes = [];

    public function __construct(array $worldTypes)
    {
        $this->worldTypes = $worldTypes;
    }

    /**
     * @param array $charactersConfig
     * @param WorldAbstract $owner
     * @return array
     */
    public function createCharacters(array $charactersConfig, WorldAbstract $owner) : array
    {
        $createdCharacters = [];
        foreach ($charactersConfig as $type => $characters) {
            foreach ($characters as $character) {
                $createdCharacters[$type][] = $this->createCharacter($type, $character, $owner);
            }
        }

        return $createdCharacters;
    }

    public function createCharacter(string $type, array $config, WorldAbstract $owner) : CharacterAbstract
    {
        $worldTypes = $this->worldTypes;
        $worldType = isset($config['world']) ? $config['world'] : array_pop($worldTypes);

        if (isset($this->worldTypes[$worldType])) {
            $characterClass = $this->worldTypes[$worldType];

            return new $characterClass($type, $config, $owner);
        }

        throw new \Exception("Character type {$type} doesnt exists");
    }
}