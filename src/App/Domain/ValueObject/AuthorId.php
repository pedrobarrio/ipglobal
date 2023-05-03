<?php
declare(strict_types=1);
namespace App\App\Domain\ValueObject;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class AuthorId
{
    protected UuidInterface $value;

    public function __construct(UuidInterface $value)
    {
        $this->value = $value;
    }

    public static function generate(): self
    {
        return new self(Uuid::uuid4());
    }

    public static function create(UuidInterface $value): self
    {
        return new self($value);
    }

    public static function fromString(string $value): self
    {
        return new self(Uuid::fromString($value));
    }

    public function getValue(): UuidInterface
    {
        return $this->value;
    }

    public function equals(AuthorId $authorId): bool
    {
        return $this->value->equals($authorId->getValue());
    }

    public function __toString()
    {
        return $this->value->toString();
    }
}
