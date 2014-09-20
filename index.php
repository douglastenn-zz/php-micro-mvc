<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('America/Sao_Paulo');

define('APP', dirname(__FILE__) . '/app/');
define('CONFIG', APP.'config/');
define('ROOT', dirname(__FILE__));
define('PUBLIC', dirname(__FILE__) . '/public/');

$db = new Database();

$teste = $db->select('*')->from('post')->get()->into('array');
// $insert = $db->insert('post',array('name' => 'TESTE INSERT', 'post' => 'teste insert'));
var_dump($teste);
exit;