<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Loginakun extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}

	function index(){
		$this->load->view('form/login');
	}

	function aksi_login(){
		$email_pelanggan = $this->input->post('email_pelanggan');
		$pass_pelanggan = $this->input->post('pass_pelanggan');
		$dataLogin = array(
			'email_pelanggan' => $email_pelanggan,
			'pass_pelanggan' => $pass_pelanggan
		);
		$cek = $this->Queryeksekusi->cek_login_pelanggan("pelanggan", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'email_pelanggan' => $email_pelanggan,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			redirect(site_url('Loginakun'));
		}
	}
	function logout(){
	   $this->session->unset_userdata(array('email_pelanggan' => '', 'pass_pelanggan' => ''));
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>