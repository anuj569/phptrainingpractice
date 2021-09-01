<?php

namespace App\Controllers;

use App\Models\employeeModel;
class Home extends BaseController
{
	public function index()
	{
		//get data fraom model
		//helper('my_new');
	    $eModel = new employeeModel();
	    $data['list'] = $eModel->get_all_data();
	    //print_r($_GET);
		$data['name'] = "Anuj,pandey"; 
		$data['name'] = remove_comma($data['name']);	
		return view('welcome_message',$data);
	}

	public function first_visit_time()
	{
		$session = \Config\Services::session();
		$first = $session->get('first_visit_time');
		if($first){
			echo "We already know your visited time: $first";
		}
		else{
			$dt = date('Y-m-d H:i:s');
			echo "We are setting your time as $dt";
			$session->set('first_visit_time', $dt);
		}

	}

	public function first_visit_time_v2()
	{
		$session = \Config\Services::session();
		$first = $session->get('first_visit_time');
		if($first){
			echo "We already know your visited time: $first";
		}
		else{
			$dt = date('Y-m-d H:i:s');
			echo "We are setting your time as $dt";
			$session->set('first_visit_time', $dt);
		}

	}

	public function logout()
	{
		$session = \Config\Services::session();
		$session->destroy();
	}
}
  