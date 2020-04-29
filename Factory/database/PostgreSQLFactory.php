<?php

class PostgreSQLFactory extends Db {

    private $param = "Postgre";

    public function getAction()
    {
        return new Postgre($this->param);
    }
}