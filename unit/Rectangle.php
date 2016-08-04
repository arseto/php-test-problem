<?php
namespace Unit;

/**
 * Create unit test for this class that covers:
 *
 * 1. Constructor test
 * 2. Getter tests
 * 3. Class function tests
 * 4. Setter test
 *
 * Pseudocode allowed, PHP code which runs under PHPUnit is preferred,
 * Happy Coding !!
 */
class Rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    public function calculatePerimeter()
    {
        return 2 * ($this->length + $this->width);
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }
}
