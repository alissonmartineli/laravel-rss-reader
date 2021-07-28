<?php

namespace App\Domain;

class DateTime extends \DateTime
{
    public function __toString(): string
    {
        return $this->format('Y-m-d H:i:s');
    }
}
