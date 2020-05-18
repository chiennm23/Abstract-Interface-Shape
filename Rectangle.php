<?php
include_once 'Shape.php';
include_once 'Resizeable.php';

class Rectangle extends Shape implements Resizeable
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

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public $height;

    public function getName()
    {
        return "Rectangle";
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function resize()
    {
        $this->width = rand(1,100);
        $this->height = rand(1,100);
        return "$this->width" . " va " . "$this->height";
    }

}