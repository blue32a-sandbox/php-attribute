<?php
/**
 * 基本的な使い方
 */

require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Sample\Basic\AttributeDumper;
use Sample\Basic\TargetClass\HasClassAttr;
use Sample\Basic\TargetMethod\HasMethodAttr;
use Sample\Basic\TargetMethod\MyMethodAttribute;

$dumper = new AttributeDumper();

$dumper->dumpClass(new ReflectionClass(HasClassAttr::class));

echo PHP_EOL;

$dumper->dumpMethods(
    new ReflectionClass(HasMethodAttr::class),
    MyMethodAttribute::class
);
