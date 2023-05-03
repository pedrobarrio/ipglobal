<?php

namespace App\App\Domain\ValueObject;

enum PostState: string
{
    case PUBLISHED = 'published';
    case UNPUBLISHED = 'unpublished';

}
