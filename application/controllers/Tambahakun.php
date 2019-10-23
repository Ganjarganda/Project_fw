<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Tambahakun extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		$this->load->view('form/daftar');
	}

//--------------------------------------------------
	//tambahAkun
	public function tambah_Akun(){
		$data = array(
			'action' 			=> site_url('Tambahakun/tambah_Akun_Aksi'),
			'pass_pelanggan' 	=> set_value('pass_pelanggan'),
			'namaD_pelanggan'	=> set_value('namaD_pelanggan'),
			'namaB_pelanggan'	=> set_value('namaB_pelanggan'),
			'email_pelanggan' 	=> set_value('email_pelanggan'),
			'alamat_pelanggan' 	=> set_value('alamat_pelanggan'),
			'kota'				=> $this->Queryeksekusi->selectKota()
		);
		$this->load->view('form/daftar', $data);
	}
	function tambah_Akun_Aksi(){
		$data = array(
			'email_pelanggan' => $this->input->post('email_pelanggan'),
			'namaD_pelanggan' => $this->input->post('namaD_pelanggan'),
			'namaB_pelanggan' => $this->input->post('namaB_pelanggan'),
			'pass_pelanggan' => $this->input->post('pass_pelanggan'),
			'alamat_pelanggan' => $this->input->post('alamat_pelanggan'),
			'id_kota' =>$this->input->post('id_kota') 
		);
		$this->Queryeksekusi->tambahAkun($data);
		redirect(site_url('Welcome'));
	}
//------------------------------------
}
?>