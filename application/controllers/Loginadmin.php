<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Loginadmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}

	function index(){
		$this->load->view('HalamanAdmin/login_admin');
	}

	function aksi_login(){
		$username_admin = $this->input->post('username_admin');
		$password_admin = $this->input->post('password_admin');
		$dataLogin = array(
			'username_admin' => $username_admin,
			'password_admin' => $password_admin
		);
		$cek = $this->Queryeksekusi->cek_login_Admin("admin", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username_admin' => $username_admin,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(site_url('Berandaadmin'));
		}else{
			redirect(site_url('Loginadmin'));
		}
	}
	function logout(){
	    $this->session->unset_userdata(array('username_admin' => '', 'password_admin' => ''));
		$this->session->sess_destroy();
		redirect(site_url('Loginadmin'));
	}
}
?>