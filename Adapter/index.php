<?php

require "circle/ICircle.php";
require "circle/CircleAreaAdapter.php";
require "circle/CircleAreaLib.php";

require "square/ISquare.php";
require "square/SquareAreaAdapter.php";
require "square/SquareAreaLib.php";


$circle = new CircleAreaAdapter(new CircleAreaLib);
echo $circle->circleArea(10) . PHP_EOL;

$square = new SquareAreaAdapter(new SquareAreaLib);
echo $square->squareArea(10) . PHP_EOL;
