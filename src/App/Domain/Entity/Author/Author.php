<?php
declare(strict_types=1);

namespace App\App\Domain\Entity\Author;

use App\App\Domain\ValueObject\AuthorId;
use App\Shared\Aggregate\AggregateRoot;

class Author extends AggregateRoot
{

    public function __construct(
        private readonly AuthorId $id,
        private readonly string $name,
        private readonly string $username,
        private readonly string $email,
        private readonly string $phone,
        private readonly string $website,
        private readonly string $company,
        private readonly string $address
    ) {
    }

    public function id(): AuthorId
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function phone(): string
    {
        return $this->phone;
    }

    public function website(): string
    {
        return $this->website;
    }

    public function company(): string
    {
        return $this->company;
    }

    public function address(): string
    {
        return $this->address;
    }


}
