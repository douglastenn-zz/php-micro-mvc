<?php

class userModel extends Database {
	private $table = 'login';

	public function auth($data) {
		$user = $this
					->select('*')
					->from('login')
					->where('email',$data['email'])
					->get()
					->into('object'); 
		if(empty($user)) {header('Location: /login'); return false;}
		if($user[0]->senha == md5($data['senha'])) {
			$_SESSION['is_logged'] = true;
			$_SESSION['email'] 	   = $user[0]->email; 
			return true;
		}
		header('Location: /login'); return false;
	}	
}