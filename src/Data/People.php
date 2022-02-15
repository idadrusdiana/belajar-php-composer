<?php

namespace BelajarPhpComposer\Data;

class People
{
    public function __construct(string $name)
    {

    }

    public function sayHello(string $name): string
    {
        return "Hello $this->name";
    }
}