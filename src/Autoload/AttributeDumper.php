<?php
declare(strict_types=1);

namespace Sample\Autoload;

use olvlvl\ComposerAttributeCollector\Attributes;

final readonly class AttributeDumper
{
    public function dumpClass(string $attribute): void {
        $targetClasses = Attributes::findTargetClasses($attribute);
        foreach ($targetClasses as $target) {
            var_dump($target->attribute, $target->name);
            echo PHP_EOL;
        }
    }
}
