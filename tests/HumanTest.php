<?php

class HumanTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $human = new \Amadeus\Objects\Human('Serhii');

        $duck = new \Amadeus\Objects\Duck('Test Duck');
        $this->assertEquals('Serhii bites Test Duck', $human->bite($duck));

        $this->assertEquals('Serhii eating meat', $human->eat('meat'));

        $this->assertEquals('Serhii work', $human->work());
    }
}