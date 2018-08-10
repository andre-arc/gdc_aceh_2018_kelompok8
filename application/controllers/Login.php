<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()

    {
        // Construct the parent class
		parent::__construct();
		$this->datastore->load();
    }

	public function index()
	{
		$this->data['content'] = $this->load->view('content/login-form',null,true);
		$this->load->view('index', $this->data);
	}

	public function proses(){
		$email = $this->input->post('user_email');
		$pass = $this->input->post('user_password');

		$store = new \GDS\Store('User');
		$sql = "select * from User where user_email = @email";

		$user = $store->fetchOne($sql, [
			'email' => $email
		]);

		if($pass === decrypt($user->user_pass)){
			$_SESSION['userdata'] = $user;
			var_dump($_SESSION['userdata']);
			redirect('dashboard');
		}
	}
}
