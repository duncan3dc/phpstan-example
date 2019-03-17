<?php

namespace duncan3dc\PHPStan;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\Php\PhpPropertyReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Reflection\PropertyReflection;
use PHPStan\Type\StringType;

class PropertiesExtension implements PropertiesClassReflectionExtension
{
    public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
    {
        echo $classReflection->getDisplayName() . "->{$propertyName}\n";

        return $classReflection->getNativeReflection()->hasProperty($propertyName);
    }

    public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
    {
        return new PhpPropertyReflection(
            $classReflection,
            new StringType(),
            $classReflection->getNativeReflection()->getProperty($propertyName),
		false,
		false
        );
    }
}
