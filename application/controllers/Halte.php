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
		
		$this->data['content'] = $this->load->view('content/halte',null,true);
		$this->load->view('index', $this->data);
	}
	
	function testing(){
		$sql = 'SELECT * FROM Halte  LIMIT 10 OFFSET 0 ORDER BY nama asc';
		$obj_gateway = new \GDS\Gateway\ProtoBuf();
    $obj_store = new \GDS\Store('Halte', $obj_gateway);
		$obj_result = $obj_store->fetchAll();
		//$res = $obj_store->query($sql)->fetchAll();
		
		foreach($obj_result as $k){
			print_r($k);
		}
	}
	
	function __search($keywords){
		
	}
	
	function get_json(){
		$limit=$_GET['limit'];
		$offset=$_GET['offset'];
		$search=(isset($_GET['search'])) ? $_GET['search'] : '';
		$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'nama';
		$order = (isset($_GET['order'])) ? $_GET['order'] : 'asc';
		
		if($search<>''){
/*			
			$this->__search($search);
			$ls_data_all = $this->db->get()->result_array();
			$ret['total']=count($ls_data_all);
			
			$this->__search($search);
			$this->db->limit($limit,$offset);
			if(($sort)&&($order))
				$this->db->order_by($sort,$order);
			$ls_data = $this->db->get()->result_array();
*/
		
		}else{
			$obj_store = new \GDS\Store('Halte');
			$sql = "SELECT * FROM Halte ";
			$res = $obj_store->query($sql)->fetchAll();
			//print_r($res);die;
			
			//ambil total data :
			$ret['total']=count($res);
			$sql.=" LIMIT $limit OFFSET $offset ";

			if(($sort)&&($order))
				$sql.=" ORDER BY $sort $order ";
			
			$res = $obj_store->query($sql)->fetchAll();
			$k=0;
			foreach($res as $obj){
				$ls_data[$k]['nama']=$obj->nama;
				$ls_data[$k]['location']['lat']=$obj->location->getLatitude();
				$ls_data[$k]['location']['lon']=$obj->location->getLongitude();
				$ls_data[$k]['radius']=$obj->radius;
				//$ls_data[$k]['entri_at']=$obj->entri_at;
				$k++;
			}
			
		}		
		$ret['rows']=$ls_data;

		header('Content-Type: application/json');
		echo json_encode($ret);		
	}
	
	
}
