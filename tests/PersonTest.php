<?php

namespace Supriadi\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person('Adi');
        self::assertEquals("Hi Budi, my name is Adi", $person->sayHello('Budi'));
    }

    public function testException()
    {
        $person = new Person('Adi');
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }

    public function testOutput()
    {
        $person = new Person('Adi');
        $this->expectOutputString("Good bye Budi".PHP_EOL);
        $person->sayGoodBye('Budi');
    }


}