<?php

require 'action/Action.php';
require 'action/MySQL.php';
require 'action/Postgre.php';
require 'action/Oracle.php';


require 'database/Db.php';
require 'database/MySQLFactory.php';
require 'database/PostgreSQLFactory.php';
require 'database/OracleFactory.php';



$mySQL = Db::getFactory('MySQL')->getAction();
$oracle = Db::getFactory('Oracle')->getAction();
$postgre = Db::getFactory('Postgre')->getAction();

print_r($mySQL->DBConnection());
print_r($oracle->DBRecrord());
print_r($postgre->DBQueryBuiler());