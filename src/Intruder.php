<?php

namespace duncan3dc;

class Intruder implements IntruderInterface
{
    /** @var object */
    private $_intruderInstance;

    /** @var \ReflectionClass */
    private $_intruderReflection;

    public function __construct(object $instance)
    {
        $this->_intruderInstance = $instance;
        $this->_intruderReflection = new \ReflectionClass($instance);
    }

    public function __get(string $name)
    {
        $property = $this->_intruderReflection->getProperty($name);
        $property->setAccessible(true);
        return $property->getValue($this->_intruderInstance);
    }
}
