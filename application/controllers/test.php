<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Test_Model');
	}
	public function add(){
		
		$this->load->view("add");
	}
	public function home(){
		$id=$this->session->userdata('id');
		$user_info=$this->Test_Model->user_info($id);
		$user_trips=$this->Test_Model->user_trips($id);
		$other_trips=$this->Test_Model->other_trips($id);
		$data=array('data' => $user_info, 'trip_data'=> $user_trips, 'other_trips'=> $other_trips);
		$this->load->view("home", $data);
	}
	public function destination($trip_id){
		$trip_info=$this->Test_Model->destinations($trip_id);
		$other_users=$this->Test_Model->travelers($trip_id);
		$data=array('trip_data'=>$trip_info, 'users_data'=>$other_users);
		$this->load->view("destination", $data);
	}
	public function add_trip(){
		$id=$this->session->userdata('id');
		$info=$this->input->post();
		if(empty($info['destination']) || empty($info['description']) || empty($info['start_date']) || empty($info['end_date'])){
			$this->session->set_flashdata('error', 'All fields are required.');
			redirect('add');
		}
		$t=time();
		$current=(date("Y-m-d",$t));
		if($info['start_date']<$current){
			$this->session->set_flashdata('error_date', 'Start date must be after today.');
			redirect('add');
		}
		if($info['start_date']>$info['end_date']){
			$this->session->set_flashdata('error_date', 'Start date must be before end date');
			redirect('add');
		}
		$this->Test_Model->add_trips($id, $info);
		redirect('home');
	}
	public function join_trip($input){
		$id=$this->session->userdata('id');
		$this->Test_Model->join_trips($id, $input);
		redirect('home');
	}
}
