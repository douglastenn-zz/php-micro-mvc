<?php

class Config {

	public function getDatabase() {

		$database['type'] = 'mysql';
		$database['hostname'] = 'localhost';
		$database['username'] = 'root';
		$database['password'] = '102030';
		$database['database_name'] = 'test';

		return $database;
	}

	public function getTemplate() {
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(APP.'/view/'); 
		$twig = new Twig_Environment($loader); 
		return $twig;
	}

}