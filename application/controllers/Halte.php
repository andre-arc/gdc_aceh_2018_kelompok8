<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halte extends Admin_Controller {

	function __construct()
	{
        // Construct the parent class
		parent::__construct();
		$this->datastore->load();
		$this->data['template'] = 'dashboard';
		
  }

	public function index()
	{
		$store = new \GDS\Store('Halte');
		
		$this->data['content'] = $this->load->view('content/halte',null,true);
		$this->load->view('index', $this->data);
	}
	
	function get_json(){
		header('Content-Type: application/json');
		$limit=$_GET['limit'];
		$offset=$_GET['offset'];
		$search=(isset($_GET['search'])) ? $_GET['search'] : '';
		$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'id';
		$order = (isset($_GET['order'])) ? $_GET['order'] : 'asc';
		
		if($search<>''){
			
			$this->__search($search);
			$ls_data_all = $this->db->get()->result_array();
			$ret['total']=count($ls_data_all);
			
			$this->__search($search);
			$this->db->limit($limit,$offset);
			if(($sort)&&($order))
				$this->db->order_by($sort,$order);
			$ls_data = $this->db->get()->result_array();
		}else{
			$this->db->select('*');
			$this->db->from($this->data['table_name']);
			
			//ambil total data :
			//$ret['total']=$this->db->count_all($this->data['table_name']);
			$ls_data = $this->db->get()->result_array();
			$ret['total']=count($ls_data);

			$this->db->select('*');
			$this->db->from($this->data['table_name']);

			$this->db->limit($limit,$offset);
			if(($sort)&&($order))
				$this->db->order_by($sort,$order);
			$ls_data = $this->db->get()->result_array();
			
		}		
		$ret['rows']=$ls_data;
		
		echo json_encode($ret);		
	}
	
	
}
