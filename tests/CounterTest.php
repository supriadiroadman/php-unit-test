<?php

namespace Supriadi\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    public function testCounter()
    {
        $counter = new Counter();

        // Cara 1 (Assert::)
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        // Cara 2 ($this->)
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        // Cara 3 (self::) Karena assertEquals adalah static function
        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    public function testIncomplete()
    {
        self::markTestIncomplete("Test function ini belum complete/selesai");
        echo "Ini tidak akan dijalankan";
    }


}



