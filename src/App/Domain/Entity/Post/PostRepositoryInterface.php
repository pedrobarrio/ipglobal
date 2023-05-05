<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Post;

use App\App\Domain\ValueObject\PostId;

interface PostRepositoryInterface
{
    public function byId(PostId $id): ?Post;

    public function save(Post $post): void;
}
