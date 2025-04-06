<?php
declare(strict_types=1);

namespace Sample\Basic\TargetMethod;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
final readonly class MyMethodAttribute
{
    public function __construct(public string $foo, public int $bar)
    {
    }
}
