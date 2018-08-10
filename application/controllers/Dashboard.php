<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	function __construct()

    {
        // Construct the parent class
		parent::__construct();
		$this->datastore->load();
		$this->data['template'] = 'dashboard';
	}
	
	public function index()
	{
		$this->data['content'] = $this->load->view('content/dashboard',null,true);
		$this->load->view('index', $this->data);
		
	}
}
