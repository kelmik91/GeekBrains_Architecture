<?php

class MySQL extends Action
{
    private $param;
    public function __construct($param)
    {
        $this->param = $param;
    }
    public function DBConnection()
    {
        return "DBConnection выполнен в " . $this->param;
    }
    public function DBRecrord()
    {
        return "DBRecrord выполнен в " . $this->param;
    }
    public function DBQueryBuiler()
    {
        return "DBQueryBuiler выполнен в " . $this->param;
    }
}