<?php

namespace App\App\Infrastructure;

use App\App\Domain\Entity\Author\Author;
use App\App\Domain\Entity\Author\AuthorRepositoryInterface;
use App\App\Domain\ValueObject\AuthorId;

class AuthorRepository implements AuthorRepositoryInterface
{

    public function byId(AuthorId $id): ?Author
    {
        return null;
    }
}

