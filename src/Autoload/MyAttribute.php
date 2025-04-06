<?php
declare(strict_types=1);

namespace Sample\Autoload;

use Attribute;

#[Attribute(Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
final readonly class MyAttribute
{
    public function __construct(public string $value) {
    }
}
