<?php
declare(strict_types=1);
namespace App\App\Domain\Model;

use App\App\Domain\Entity\Post\Post;

interface PostServiceInterface
{
    public function getAllPosts(): array;

    public function getPostById(int $id): Post;

}

