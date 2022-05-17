<?php

namespace Supriadi\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    // Function setUp ini akan dijalankan pertama kali, jadi pembuatan object Person di pindahkan ke sini
    // Agar tidak membuat object person berulang-ulang.
    protected function setUp(): void
    {
        $this->person = new Person('Adi');
    }

    public function testSuccess()
    {
//        $person = new Person('Adi');
        self::assertEquals("Hi Budi, my name is Adi", $this->person->sayHello('Budi'));
    }

    public function testException()
    {
//        $person = new Person('Adi');
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput()
    {
//        $person = new Person('Adi');
        $this->expectOutputString("Good bye Budi".PHP_EOL);
        $this->person->sayGoodBye('Budi');
    }


}