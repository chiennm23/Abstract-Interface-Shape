<?php
include_once 'Shape.php';
include_once 'Resizeable.php';

class Square extends Shape implements Resizeable
{
    public $width;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getName()
    {
        return "Square: ";
    }

    public function getArea()
    {
        return pow($this->width,2);
    }

    public function resize()
    {
        return $this->width = rand(1,100);
    }
}