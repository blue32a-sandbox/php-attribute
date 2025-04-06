<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Sample\Autoload\AttributeDumper;
use Sample\Autoload\MyAttribute;

$dumper = new AttributeDumper();
$dumper->dumpClass(MyAttribute::class);
