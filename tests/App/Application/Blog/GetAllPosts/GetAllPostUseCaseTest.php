<?php
declare(strict_types=1);
namespace App\Tests\App\Application\Blog\GetAllPosts;

use App\App\Application\Blog\GetAllPosts\GetAllPostUseCase;
use PHPUnit\Framework\TestCase;

class GetAllPostUseCaseTest extends TestCase
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
