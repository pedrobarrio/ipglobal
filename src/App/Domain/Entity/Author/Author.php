<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Author;

use App\App\Domain\ValueObject\AuthorId;
use App\Shared\Aggregate\AggregateRoot;

class Author extends AggregateRoot
{
    public function __construct(
        private readonly AuthorId $id,
        private readonly string $name
    ) {
    }

    public function id(): AuthorId
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }
}
