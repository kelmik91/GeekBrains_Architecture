<?php

class CircleAreaAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea($circumference)
    {
        return $this->circleAreaLib->getCircleArea($circumference / M_PI);
    }
}