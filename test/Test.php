<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    public function gummibeer(int $i)
    {
        $password = require realpath(__DIR__.'/../src/gummibeer.php');

        $this->assertIsString($password);
        $this->assertEquals(16, strlen($password));
        $this->assertTrue(boolval(preg_match("/[a-z]/", $password)));
        $this->assertTrue(boolval(preg_match("/[A-Z]/", $password)));
        $this->assertTrue(boolval(preg_match("/[0-9]/", $password)));
        $this->assertTrue(boolval(preg_match("/[\!\#\$\%\&\(\)\*\+\,\-\.\/\:\;\<\=\>\? \@\[\]\^\_\{\|\}\~]/", $password)));
    }

    public function provider(): array
    {
        return array_map(fn(int $i) => [$i], range(1, 10000));
    }
}