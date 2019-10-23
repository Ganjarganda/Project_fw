<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Kontak extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('Queryeksekusi');
	}

	public function index(){
		$this->load->view('kontakkami');
	}

	function inputSaran(){
		$data=array(
			'nama_saran'	 =>$this->input->post('nama_saran'),
			'email_saran'	 =>$this->input->post('email_saran'),
			'komentar_saran' =>$this->input->post('komentar_saran'),
		);
		$this->Queryeksekusi->insertSaran($data);
		redirect(site_url('Kontak'));
	}

}
?>