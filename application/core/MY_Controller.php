<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	var $data;
	var $CI;
	
	function __construct(){
			parent::__construct();
			$this->CI=get_instance();

			// if($this->__is_logged()){
			// 	$this->data['template'] = 'dashboard';
			// }else{
			// 	$this->data['template'] = 'home';
			// }

	}

	function __is_logged(){
		return (boolean) isset($_SESSION['userdata']);
	}



	
}

class Admin_Controller extends MY_Controller {
	var $data;
	
	function __construct(){
		parent::__construct();
	
		// if (!$this->__is_logged()) redirect('login/logout');

		// $this->__get_user_role();
	}

	function __get_user_role(){
		$this->data['role'] = $this->session->userdata('role');
	}
	
}