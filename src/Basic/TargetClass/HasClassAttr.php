<?php
declare(strict_types=1);

namespace Sample\Basic\TargetClass;

#[MyClassAttribute(foo: 'class HasClassAttr', bar: 123)]
#[MyClassAttribute(foo: 'MyClassAttribute is repeatable', bar: 456)]
final readonly class HasClassAttr
{
}
