<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Post;

use App\App\Domain\ValueObject\AuthorId;
use App\App\Domain\ValueObject\PostId;
use App\App\Domain\ValueObject\PostState;
use App\Shared\Aggregate\AggregateRoot;

class Post extends AggregateRoot
{
    public function __construct(
        private readonly PostId $id,
        private readonly string $title,
        private readonly string $body,
        private readonly AuthorId $author,
        private PostState $state = PostState::UNPUBLISHED
    ) {
    }

    public function id(): PostId
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function state(): PostState
    {
        return $this->state;
    }

    public function publish(): void
    {
        $this->state = PostState::PUBLISHED;
    }

    public function author(): AuthorId
    {
        return $this->author;
    }

    public function toJson(): bool|string
    {
        return json_encode(
            [
            'id' => $this->id->value(),
            'title' => $this->title,
            'body' => $this->body,
            'userId' => $this->author->value(),
            'state' => $this->state
            ]
        );
    }
}
