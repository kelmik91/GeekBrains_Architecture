<?php

abstract class Action
{
    abstract public function DBConnection();

    abstract public function DBRecrord();

    abstract public function DBQueryBuiler();
}