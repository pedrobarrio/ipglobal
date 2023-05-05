<?php
declare(strict_types=1);

namespace App\App\Application\API\GetPost;

//API
use App\App\Domain\Entity\Author\AuthorRepositoryInterface;
use App\App\Domain\Entity\Post\PostRepositoryInterface;
use App\App\Domain\ValueObject\PostId;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GetPostByIdUseCase
{
    public function __construct(
        private readonly AuthorRepositoryInterface $authorRepository,
        private readonly PostRepositoryInterface $postRepository
    ) {
    }

    public function execute(string $id): GetPostByIdResponse
    {
        $post = $this->postRepository->byId(PostId::fromString($id));
        if (!$post) {
            throw new NotFoundHttpException();
        }
        $this->authorRepository->byId($post->author());
        return new GetPostByIdResponse();

    }

}
