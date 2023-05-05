<?php
declare(strict_types=1);
namespace App\App\Infrastructure;

use App\App\Domain\Entity\Post\Post;
use App\App\Domain\Entity\Post\PostRepositoryInterface;
use App\App\Domain\ValueObject\AuthorId;
use App\App\Domain\ValueObject\PostId;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PostRepository implements PostRepositoryInterface
{

    public function __construct(private string $url, private readonly HttpClientInterface $client)
    {
        $this->url = 'https://jsonplaceholder.typicode.com/';
    }

    public function byId(PostId $id): ?Post
    {
        $response = $this->client->request(
            'GET',
            $this->url . 'posts/' . $id->value(),
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );
        if ($response->getStatusCode() !== 200) {
            throw new PostNotFound('Post not found');
        }

        $responseArray = json_decode($response->getContent(),true);
        if (empty($responseArray)) {
             throw new PostNotFound('Post not found');
        }
        return new Post(
            new PostId($responseArray['id']),
            $responseArray['title'],
            $responseArray['body'],
            new AuthorId($responseArray['userId'])
        );
    }

    public function save(Post $post): void
    {
    }
}
