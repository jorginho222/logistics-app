<?php

namespace Domains\Shared\ValueObjects;

class PersonFullName
{
    public function __construct(
        private string $firstName,
        private string $lastName
    )
    {}

    public function toString(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
