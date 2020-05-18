<?php
include_once "Shape.php";
include_once "Resizeable.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getName()
    {
        return "Circle: ";
    }

    public function resize()
    {
        return $this->radius = rand(1,100) ;
    }
    public function getArea()
    {
        return pi() *  pow($this->radius, 2);
    }
}