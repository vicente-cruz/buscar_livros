<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors","On");

require "environment.php";

global $config;
$config = array();

switch (ENVIRONMENT)
{
    case "development":
        $config['dbtype'] = 'mysql';
        $config['dbhost'] = 'localhost';
        $config['dbname'] = 'consultar_livros';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
        break;
    case "testing":
        $config['dbtype'] = '';
        $config['dbhost'] = '';
        $config['dbname'] = '';
        $config['dbuser'] = '';
        $config['dbpass'] = '';
        break;
    case "acceptance":
        $config['dbtype'] = '';
        $config['dbhost'] = '';
        $config['dbname'] = '';
        $config['dbuser'] = '';
        $config['dbpass'] = '';
        break;
    case "production":
        $config['dbtype'] = '';
        $config['dbhost'] = '';
        $config['dbname'] = '';
        $config['dbuser'] = '';
        $config['dbpass'] = '';
        break;
}
    
?>