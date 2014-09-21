<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('America/Sao_Paulo');

define('APP', dirname(__FILE__) . '/app/');
define('CONFIG', APP.'config/');
define('ROOT', dirname(__FILE__));
define('PUBLIC_PATH', dirname(__FILE__) . '/public/');
define('VENDOR', dirname(__FILE__) . '/vendor/');

require_once(VENDOR.'autoload.php');

session_start();
Router::route(new Request);