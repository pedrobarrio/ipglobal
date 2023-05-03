<?php

namespace App\App\Domain\Entity\Author;

use App\App\Domain\ValueObject\AuthorId;

interface AuthorRepositoryInterface
{
    public function byId(AuthorId $id): ?Author;
}
