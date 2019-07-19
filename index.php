<?php

require_once 'vendor/autoload.php';
define('APPNAME', parse_ini_file("config/general.conf")['appName']);

$router = new \Core\Router;

try{
    // Warnings and notices handling in addition of throwable errors.
    set_error_handler(function ($severity, $message, $file, $line) {
        throw new \ErrorException($message, $severity, $severity, $file, $line);
    });
     
    $router->route();
    
    restore_error_handler();
}
catch(\Throwable $e){
    var_dump($e);
}