<?php

namespace App\Domain\News;

interface Repository
{
    public function getAllSortedByPubDate(): array;
}
