<?php

class SquareAreaAdapter implements ISquare
{
    private $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea($sideSquare)
    {
        return $this->squareAreaLib->getSquareArea(+$sideSquare * sqrt(2));
    }

}