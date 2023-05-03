<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Post;

use App\App\Domain\ValueObject\PostId;
use App\App\Domain\ValueObject\PostState;
use App\Shared\Aggregate\AggregateRoot;

class Post extends AggregateRoot
{
    public function __construct(
        private readonly PostId $id,
        private readonly string $name,
        private readonly string $content,
        private PostState $state = PostState::UNPUBLISHED
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

    public function state(): PostState
    {
        return $this->state;
    }

    public function publish()
    {
        $this->state = PostState::PUBLISHED;
    }
}
