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
}



