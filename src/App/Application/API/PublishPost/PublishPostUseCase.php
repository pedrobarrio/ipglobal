<?php
declare(strict_types=1);

namespace App\App\Application\API\PublishPost;

//API
use App\App\Domain\Entity\Post\PostRepositoryInterface;
use App\App\Domain\ValueObject\PostId;

class PublishPostUseCase
{
    public function __construct(private readonly PostRepositoryInterface $postRepository)
    {
    }

    public function execute(string $id): PublishPostResponse
    {
        $post = $this->postRepository->byId(PostId::fromString($id));
        $post->publish();
        $this->postRepository->save($post);
        $post = $this->postRepository->byId(PostId::fromString($id));
        return new PublishPostResponse(); //TODO: return post
    }

}
