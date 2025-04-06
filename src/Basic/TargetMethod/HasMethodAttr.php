<?php
declare(strict_types=1);

namespace Sample\Basic\TargetMethod;

use Deprecated;

final readonly class HasMethodAttr
{
    #[MyMethodAttribute(foo: 'method foo in HasMethodAttr', bar: 12)]
    #[Deprecated('foo method deprecated')]
    public function foo(): string {
        return 'foo';
    }

    #[MyMethodAttribute(foo: 'method bar in HasMethodAttr', bar: 34)]
    public function bar(): int {
        return 123;
    }
}
