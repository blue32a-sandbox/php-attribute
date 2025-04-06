<?php
declare(strict_types=1);

namespace Sample\Autoload\Target;

use Sample\Autoload\MyAttribute;

#[MyAttribute('bar class')]
final readonly class BarClass
{
    #[MyAttribute('bar method')]
    public function bar(): int {
        return 42;
    }
}
