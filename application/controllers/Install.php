<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends MY_Controller {

	function __construct()

    {
        // Construct the parent class
		parent::__construct();
		$this->datastore->load();

	}
	
	public function index()
	{
		$this->__user();
		$this->__halte();
	}

	function __user(){
		$obj_store = new \GDS\Store('User');

		// Create a simple Entity object
		$obj_user = $obj_store->createEntity([
			'user_name' => 'admin',
			'user_pass' => encrypt('admin'),
			'user_email' => 'admin@microsoft.net',
			'first_name' => 'admin',
			'last_name' => '',
			'user_description' => 'administrator',
			'is_active' => true,
			'entry_at' => new DateTime(),
		]);

		// Insert into the Datastore
		$obj_store->upsert($obj_user);

		// Show the key
		echo "Created User with key: ", $obj_user->getKeyId()."<br>";
		echo "<hr>";
	}
	function __halte(){
		$obj_store = new \GDS\Store('Halte');

		$row = 0;
		if (($handle = fopen("data\halte.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			  $num = count($data);
			  $row++;
			 if($row > 1){
				 // Create a simple Entity object
				 $obj_halte = $obj_store->createEntity([
					'nama' => $data[1],
					'location' => new GDS\Property\Geopoint($data[2], $data[3]),
					'radius' => 50,
					'entry_at' => new DateTime(),
				]);

				// Insert into the Datastore
				$obj_store->upsert($obj_halte);

				// Show the key
				echo "Created Halte with key: ", $obj_halte->getKeyId()."<br>";
				echo "<hr>";
			 }
			}
			fclose($handle);
		  }
	}


}
