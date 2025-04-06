<?php
declare(strict_types=1);

namespace Sample\Basic\TargetClass;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
final readonly class MyClassAttribute
{
    public function __construct(public string $foo, public int $bar)
    {
    }
}
