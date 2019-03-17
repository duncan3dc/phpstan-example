#!/usr/bin/env php
<?php

use duncan3dc\Example;
use duncan3dc\Intruder;
use duncan3dc\IntruderInterface;

require __DIR__ . "/vendor/autoload.php";

/** @var Example&IntruderInterface */
$example = new Intruder(new Example());

if ($example->private) {
}
