<?php
declare(strict_types=1);

namespace App\App\Application\API\GetPost;

//API
use App\App\Domain\Entity\Author\AuthorRepositoryInterface;
use App\App\Domain\Entity\Post\PostRepositoryInterface;

class GetPostByIdUseCase
{
    public function __construct(
        private readonly AuthorRepositoryInterface $authorRepository,
        private readonly PostRepositoryInterface $postRepository
    ) {
    }

    public function execute()
    {

    }

}
