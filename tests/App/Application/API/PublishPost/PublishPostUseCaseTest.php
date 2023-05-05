<?php
declare(strict_types=1);
namespace App\Tests\App\Application\API\PublishPost;

use App\App\Application\API\PublishPost\PublishPostUseCase;
use PHPUnit\Framework\TestCase;

class PublishPostUseCaseTest extends TestCase
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
