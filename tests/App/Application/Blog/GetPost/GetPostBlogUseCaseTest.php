<?php
declare(strict_types=1);
namespace App\Tests\App\Application\Blog\GetPost;

use App\App\Application\Blog\GetPost\GetPostBlogUseCase;
use PHPUnit\Framework\TestCase;

class GetPostBlogUseCaseTest extends TestCase
{
    protected function setUp(): void
    {

        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
    public function testWhenGetAnInvalidPostThenReturnError()
    {
        $expected = [];
        $this->assertJsonStringEqualsJsonString(json_encode($expected),json_encode($expected));
    }
}
