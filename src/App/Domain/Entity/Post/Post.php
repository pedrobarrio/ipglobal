<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Post;

use App\App\Domain\ValueObject\PostId;
use App\Shared\Aggregate\AggregateRoot;

class Post extends AggregateRoot
{
    public function __construct(
        private readonly PostId $id,
        private readonly string $name,
        private readonly string $content
    ) {
    }

    public function id(): PostId
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function content(): string
    {
        return $this->content;
    }
}
