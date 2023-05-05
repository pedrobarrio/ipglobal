<?php
declare(strict_types=1);

namespace App\Application\API\GetPost;

use App\App\Domain\Entity\Post\PostRepositoryInterface;
use App\App\Domain\ValueObject\PostId;
use App\App\Infrastructure\PostNotFound;
use App\App\Infrastructure\PostRepository;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class GetPostByIdUseCaseTest extends TestCase
{
    private PostRepositoryInterface $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new PostRepository('https://jsonplaceholder.typicode.com/', HttpClient::create());
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testWhenGetAPostThenReturnOk()
    {
        $result = $this->repository->byId(new PostId(1));

        $expected = [
            "userId" => 1,
            "id" => 1,
            "title" => "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
            "body" => "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto",
            "userId" => 1,
            "state" => "unpublished"
        ];
        $this->assertJsonStringEqualsJsonString(json_encode($expected), $result->toJson());
    }

    public function testWhenGetNotHavingAPostThenReturnOk()
    {
        $this->assertTrue(true);
    }

    public function testWhenGetAnInvalidPostThenReturnError()
    {
        $this->expectException(PostNotFound::class);
        $this->repository->byId(new PostId(1111111));

    }

    public function testWhenGetAnInvalidPostThenReturnError2()
    {
        $this->expectException(PostNotFound::class);
        $this->repository->byId(new PostId(1111111));

    }
}
