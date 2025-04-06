<?php
declare(strict_types=1);

namespace Sample\Basic;

use ReflectionAttribute;
use ReflectionClass;
use ReflectionMethod;

final readonly class AttributeDumper
{
    public function dumpClass(ReflectionClass $reflection): void {
        echo 'class... ' . $reflection->name . PHP_EOL;

        $attributes = $reflection->getAttributes();
        $this->dumpAttributes($attributes);
    }

    public function dumpMethods(ReflectionClass $reflection, ?string $name = null): void {
        $methods = $reflection->getMethods();
        echo 'method count... ' . count($methods) . PHP_EOL;

        foreach ($methods as $method) {
            $this->dumpMethod($method, $name);
        }
    }

    public function dumpMethod(ReflectionMethod $reflection, ?string $name = null): void {
        echo 'method... ' . $reflection->name . PHP_EOL;

        $attributes = $reflection->getAttributes($name);
        $this->dumpAttributes($attributes);
    }

    private function dumpAttributes(array $attributes): void {
        echo 'attributes count... ' . count($attributes) . PHP_EOL;

        foreach ($attributes as $attribute) {
            $this->dump($attribute);
        }
    }

    private function dump(ReflectionAttribute $attribute): void {
        echo 'attribute name... ' . $attribute->getName() . PHP_EOL;
        var_dump('attribute arguments...', $attribute->getArguments());
        var_dump('attribute new instance...', [$attribute->newInstance()]);
    }
}
