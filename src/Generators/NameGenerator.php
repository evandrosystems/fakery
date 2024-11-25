<?php

namespace Fakery\Generators;

use Fakery\Contracts\GeneratorInterface;

class NameGenerator implements GeneratorInterface
{
    private array $firstNames = [
        'John', 
        'Jane', 
        'Alice', 
        'Bob', 
        'Charlie', 
        'David', 
        'Eve', 
        'Frank', 
        'Grace', 
        'Henry'
    ];

    private array $lastNames = [
        'Doe de la Plata', 
        'Smith de la Cruz', 
        'Johnson de la Torre', 
        'Brown de la Vega', 
        'Williams de la Rosa', 
        'Jones de la Fuente', 
        'Miller de la Roca', 
        'Davis de la Sierra', 
        'Garcia de la Montaña', 
        'Rodriguez de la Luna'
    ];

    public function generate(): string
    {
        $firstName = $this->firstNames[array_rand($this->firstNames)];
        $lastName = $this->lastNames[array_rand($this->lastNames)];

        return "$firstName $lastName";
    }
}