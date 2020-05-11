<?php

abstract class Command
{
    public abstract function execute();
    public abstract function unExecute();
}