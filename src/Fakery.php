<?php

namespace Fakery;

use Fakery\Generators\NameGenerator;

class Fakery
{
    private NameGenerator $nameGenerator;

    public function __construct()
    {
        $this->nameGenerator = new NameGenerator();
    }

    public function name(): string
    {
        return $this->nameGenerator->generate();
    }
}