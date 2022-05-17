<?php

namespace Supriadi\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
        echo "Dibuat hanya sekali untuk semua function test";
    }

    public function testFirst()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void
    {
        echo "Unit Test Selesai" . PHP_EOL;
    }
}