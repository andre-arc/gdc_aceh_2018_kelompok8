<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()

    {
        // Construct the parent class
		parent::__construct();
		$this->datastore->load();
		$this->data['template'] = 'home';
    }

	public function index()
	{
		$this->data['content'] = $this->load->view('content/home',null,true);
		$this->load->view('index', $this->data);
	}

	public function klasemen()
	{
		$this->data['content'] = $this->load->view('content/klasemen',null,true);
		$this->load->view('index', $this->data);
	}

	public function halte()
	{
		$this->data['content'] = $this->load->view('content/halte',null,true);
		$this->load->view('index', $this->data);
	}


}
