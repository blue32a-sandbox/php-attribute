<?php
declare(strict_types=1);

namespace Sample\Autoload\Target;

use Sample\Autoload\MyAttribute;

#[MyAttribute(value: 'foo class')]
final readonly class FooClass
{
    #[MyAttribute(value: 'foo method')]
    public function foo(): string {
        return 'foo';
    }
}
