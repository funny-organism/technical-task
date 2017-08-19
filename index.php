<?php
require_once __DIR__ . '/vendor/autoload.php';

$fauna = new \Amadeus\Fauna();

$result = [];
foreach ($fauna->getAnimals() as $animal) {
    $result[] = $animal->move(mt_rand(0, 20));
    $result[] = $animal->speak();

    if ($animal instanceof \Core\Animals\Actions\BiteableInterface) {
        $faunaAnimals = array_values($fauna->getAnimals());
        $randomAnimal = $faunaAnimals[mt_rand(0, count($faunaAnimals) - 1)];
        $result[] = $animal->bite($randomAnimal);
    }

    if ($animal instanceof \Core\Animals\Actions\FlyableInterface) {
        $result[] =  $animal->fly();
    }

    if ($animal instanceof \Amadeus\Actions\WorkableInterface) {
        $result[] =  $animal->work();
    }

    $result[] =  $animal->eat('apple');
}

echo implode('<br />', $result);