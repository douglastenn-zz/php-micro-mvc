<?php
	class Load{
		private $config;

		public function __construct() {
			$this->config = new Config;
		}

		public function view($name,array $vars = array()){
			$file = $name.'View.php';
			if($file != 'loginView.php') {
				if(!isset($_SESSION['is_logged'])) {
					return header("Location: /login");
				}
			}
			$twig = $this->config->getTemplate();
			echo $twig->render($file, $vars); 
		}	
		public function model($name){
			$model = $name.'Model';
			return new $model;
		}	
	}