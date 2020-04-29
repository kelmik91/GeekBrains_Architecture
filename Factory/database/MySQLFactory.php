<?php

class MySQLFactory extends Db
{
    private $param = "MySQL";

    public function getAction()
    {
        return new MySQL($this->param);
    }
}