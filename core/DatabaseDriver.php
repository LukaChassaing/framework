<?php

namespace Core;

class DatabaseDriver extends \PDO{

    public function __construct()
    {
        $dbConf = parse_ini_file("Config/database.conf");
        return parent::__construct("mysql:dbname={$dbConf['dbname']};host={$dbConf['host']}", $dbConf['username'], $dbConf['password']);
    }

}