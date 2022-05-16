<?php

namespace Supriadi\Test;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {

    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        echo $counter->getCounter().PHP_EOL;
    }

    public function testOther()
    {
        echo "Dari method testOther".PHP_EOL;
    }
}

// Menjalankan semua test di class Counter
// vendor/bin/phpunit tests/CounterTest.php

// Menjalankan test per method
//vendor/bin/phpunit --filter 'CounterTest::testOther' tests/CounterTest.php



