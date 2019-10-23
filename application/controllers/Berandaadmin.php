<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Berandaadmin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}

	function index(){
		$data['data_saran']=$this->Queryeksekusi->tampilSaran();
		$this->load->view('HalamanAdmin/beranda_admin',$data);
	}
	function deleteSaran($id_saran){
		$this->Queryeksekusi->hapusSaran($id_saran);
		redirect(site_url('Berandaadmin'));
	}

}
?>