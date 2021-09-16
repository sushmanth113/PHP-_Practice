<?php

class Shape
{
    public $numberOfSides;
    public $name;

    public function setNumberOfSides($numberOfSides)
    {
        $this->numberOfSides = $numberOfSides;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNumberOfSides()
    {
        return $this->numberOfSides;
    }

    public function getName()
    {
        return $this->name;
    }
}

$triangle = new Shape();
$triangle->setName("triangle");
$triangle->setNumberofSides(3);
echo $triangle->getName();
echo"<br>";
echo $triangle->getNumberOfSides();
echo"<br>";

$circle = new Shape();
$circle->setName("circle");
$circle->setNumberOfSides(0);
echo $circle->getName();
echo"<br>";
echo $circle->getNumberOfSides();
?>