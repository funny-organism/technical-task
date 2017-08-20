<?php

class DogTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $dog = new \Amadeus\Objects\Dog('Doug');

        $this->assertEquals('Doug run', $dog->move(11));
        $this->assertEquals('Doug move', $dog->move(5));
        $this->assertEquals('Doug stand', $dog->move(-1));
        $this->assertEquals('Doug stand', $dog->move(0));

        $this->assertEquals('Doug eating banana', $dog->eat('banana'));

        $human = new \Amadeus\Objects\Human('Test Human');
        $this->assertEquals('Doug bites Test Human', $dog->bite($human));

        $this->assertEquals('Doug wuf', $dog->speak());
    }
}