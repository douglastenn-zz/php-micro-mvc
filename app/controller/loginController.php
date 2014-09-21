<?php
	class loginController extends baseController{
		private $user;

		public function __construct(){
			parent::__construct();
			$this->user = $this->load->model('user');
		}

		public function index(){
			$this->load->view('login');	
		}

		public function auth() {
			if($_SERVER['REQUEST_METHOD'] != "POST") {
				$this->load->view('login',array('message' => 'Erro ao logar'));
			}

			$auth = $this->user->auth($_POST);
			if($auth) {
				$this->load->view('home');
			}
			$this->load->view('login',array('message' => 'Usuário ou senha inválidos'));
		}

	}