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

        static::assertPassword($password);
    }
    
    protected static function assertPassword($password)
    {
        static::assertIsString($password, $password);
        static::assertEquals(16, strlen($password), $password);
        static::assertTrue(boolval(preg_match("/[a-z]/", $password)), $password);
        static::assertTrue(boolval(preg_match("/[A-Z]/", $password)), $password);
        static::assertTrue(boolval(preg_match("/[0-9]/", $password)), $password);
        static::assertTrue(boolval(preg_match('/['.preg_quote('!#$%&()*+,-./:;<=>? @\[\]^_{|}~').']/', $password)), $password);
    }

    public function provider(): array
    {
        return array_map(fn(int $i) => [$i], range(1, 10000));
    }
}