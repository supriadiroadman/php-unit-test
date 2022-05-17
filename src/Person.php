<?php

namespace Supriadi\Test;


class Person
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(?string $name): string
    {
        if ($name == null) {
            throw new \Exception('Name is null');
        }

        return "Hi $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name): void
    {
        echo "Good bye $name". PHP_EOL;
    }
}