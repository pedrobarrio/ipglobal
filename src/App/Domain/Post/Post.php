<?php
declare(strict_types=1);

namespace App\App\Domain\Post;

use App\Shared\Aggregate\AggregateRoot;

class Post extends AggregateRoot
{
    public function __construct(
        private readonly PostId $id,
        private readonly string $name,
        private readonly string $content
    )
    {
    }
}
