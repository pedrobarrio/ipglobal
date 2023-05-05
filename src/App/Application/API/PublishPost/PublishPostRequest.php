<?php
declare(strict_types=1);

namespace App\App\Application\API\PublishPost;

class PublishPostRequest
{
    public function __construct(private readonly string $id)
    {
    }

    public function id(): string
    {
        return $this->id;
    }


}
