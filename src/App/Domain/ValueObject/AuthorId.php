<?php
declare(strict_types=1);

namespace App\App\Domain\ValueObject;

class AuthorId
{

    public function __construct(private readonly int $value)
    {
    }

    public static function create(int $value): self
    {
        return new self($value);
    }

    public static function fromString(string $value): self
    {
        return new self((int)$value);
    }

    public function value(): int
    {
        return $this->value;
    }

    public function equals(AuthorId $authorId): bool
    {
        return $this->value === $authorId->value();
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}
