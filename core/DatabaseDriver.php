<?php

namespace Core;

class DatabaseDriver extends \PDO{

    public function __construct($dbName = null)
    {
        $dbConf = parse_ini_file("config/database.conf");

        if($dbName !== null){
            return parent::__construct("{$dbConf[$dbName]['driver']}:dbname={$dbConf[$dbName]['dbname']};host={$dbConf[$dbName]['host']}", $dbConf[$dbName]['username'], $dbConf[$dbName]['password']);
        }
        return parent::__construct("{$dbConf['driver']}:dbname={$dbConf['dbname']};host={$dbConf['host']}", $dbConf['username'], $dbConf['password']);
    }

}