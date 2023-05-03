<?php

namespace App\Application\API\GetPost;

use PHPUnit\Framework\TestCase;

class GetPostByIdUseCaseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testWhenGetAPostThenReturnOk()
    {
        $this->assertTrue(true);
    }

    public function testWhenGetNotHavingAPostThenReturnOk()
    {
        $this->assertTrue(true);
    }

    public function testWhenGetAnInvalidPostThenReturnError()
    {
        $this->assertTrue(true);
    }

    public function testWhenGetAnInvalidPostThenReturnError2()
    {
        $this->assertTrue(true);
    }

}
