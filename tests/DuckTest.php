<?php

class DuckTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $duck = new \Amadeus\Objects\Duck('Donald');

        $this->assertEquals('Donald move', $duck->move(20));
        $this->assertEquals('Donald stand', $duck->move(mt_rand(-20, 0)));

        $this->assertEquals('Donald crya', $duck->speak());

        $this->assertEquals('Donald swim', $duck->swim());

        $this->assertEquals('Donald eating bread', $duck->eat('bread'));
    }
}