<?php
declare(strict_types=1);

namespace App\App\Domain\Author;

use App\App\Domain\ValueObject\AuthorId;
use App\Shared\Aggregate\AggregateRoot;

class Author extends AggregateRoot
{
    public function __construct(
        private readonly AuthorId $id,
        private readonly string $name
    ) {
    }
}
