<?php

abstract class Figures
{
    public abstract function calcSquare();
    public abstract function calcPerimeter();
}

abstract class Primitive
{
    public abstract function getPoints();
}

class Quadrate extends Figures
{
    private $sideA;
    
    public function __construct($sideA)
    {
        $this->sideA = $sideA;
    }
    public function calcSquare() 
    {
        $square = $this->sideA * $this->sideA;
        echo $square;
    }
    public function calcPerimeter() 
    {
        $perimeter = 4 * $this->sideA;
        echo $perimeter;
    }
}
class Rectangle extends Figures
{
    private $sideA;
    private $sideB;
    
    public function __construct($sideA, $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }
    public function calcSquare() 
    {
        $square = $this->sideA * $this->sideB;
        echo $square;
    }
    public function calcPerimeter() 
    {
        $perimeter = 2 * $this->sideA + 2 * $this->sideB;
        echo $perimeter;
    }
}

class Circle extends Figures
{
    const PI = 3.1415;
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function calcSquare() 
    {
        $pi = self::PI;
        $square = $this->radius * $this->radius * $pi;
        echo $square;
    }
    public function calcPerimeter() 
    {
        $pi = self::PI;
        $perimeter = 2 * $pi * $this->radius;
        echo $perimeter;
    }
}

class Line extends Primitive
{
    public function getPoints()
    {
        echo "This is line";
    }
}

$quadrate1 = new Quadrate(5);
//$quadrate1->calcSquare();
//echo '<br>';
//$quadrate1->calcPerimeter();

//echo '<br>';

$rectangle1 = new Rectangle(4, 5);
//$rectangle1->calcSquare();
//echo '<br>';
//$rectangle1->calcPerimeter();
//
//echo '<br>';

$circle1 = new Circle(10);
//$circle1->calcSquare();
//echo '<br>';
//$circle1->calcPerimeter();

$line = new Line;

$objects = [];
$objects[] = $quadrate1;
$objects[] = $rectangle1;
$objects[] = $circle1;
$objects[] = $line;

foreach ($objects as $object)
{
    if($object instanceof Figures)
    {
        $object->calcSquare();
        echo '<br>';
        $object->calcPerimeter();
        echo '<br>';
    }
    else 
    {
        $object->getPoints();
    }
}