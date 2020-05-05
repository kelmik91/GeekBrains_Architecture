<?php

class SquareAreaLib
{
    public function getSquareArea($diagonal)
    {
        $area = (+$diagonal**2)/2;
        return $area;
    }
}