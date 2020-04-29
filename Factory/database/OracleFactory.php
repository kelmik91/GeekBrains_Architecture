<?php

class OracleFactory extends Db {

    private $param = "Oracle";

    public function getAction()
    {
        return new Oracle($this->param);
    }
}