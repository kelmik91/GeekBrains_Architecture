<?php

abstract class Db //где сделать
{
    public function getFactory($factory)
    {
        switch ($factory) {
            case "MySQL":
                return new MySQLFactory();
            case "Postgre":
                return new PostgreSQLFactory();
            case "Oracle":
                return new OracleFactory();
        }
        throw new Exception("Error");
    }

    abstract public function getAction();
}
