<?php
	class testController extends baseController{

		public function __construct(){
			parent::__construct();
		}

		public function index() {

		}

		public function test(){
				$vars['title'] = 'asdasdas';
				$this->load->view('test',$vars);	
				//var_dump(func_get_args()); exit;
		}

	}