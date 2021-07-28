<?php

namespace App\Domain;

class Link
{
    private string $address;

    public function __construct(string $address)
    {
        if (false === filter_var($address, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException('Invalid Link');
        }

        $this->address = $address;
    }

    public function __toString(): string
    {
        return $this->address;
    }
}
