<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$circle = new Circle();
$circle->setRadius(10);
echo $circle->getName() . " co bk: " . $circle->getRadius(). " va ban kinh thay doi: " . $circle->resize() . " Area: " . $circle->getArea() . "<br>";

$rectangle = new Rectangle();
$rectangle->setWidth(10);
$rectangle->setHeight(8);
echo $rectangle->getName() . " co kich thuoc: " . $rectangle->getWidth(). " va " .$rectangle->getHeight(). " va kich thuoc sau thay doi " . $rectangle->resize(), " Area: " . $rectangle->getArea(). "<br>";

$square = new Square();
$square->setWidth(10);
echo $square->getName() . " co kich thuoc: " .$square->getWidth(). " va kich thuoc sau khi thay doi " . $square->resize() . " Area: " . $square->getArea();