<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Profilakun extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}

	function index(){
		$email_pelanggan = $this->session->userdata('email_pelanggan');
		//Saat nampilkan secara detail pengguna yang sudah login
		$data_Pelanggan_SudahLogin['data_pelanggan'] = $this->Queryeksekusi->tampilAkun($email_pelanggan);
		//Saat Barang sudah dibeli pelanggan yang sudah login
		$data_Pelanggan_SudahLogin['data_dibeli'] = $this->Queryeksekusi->SelectPenjualan_per_pelanggan($email_pelanggan);
		$this->load->view('profil/profil', $data_Pelanggan_SudahLogin);
	}
	function editAkun($email_pelanggan){
		$pelanggan=$this->Queryeksekusi->tampilAkun($email_pelanggan);
		$data = array(
			'email_pelanggan' =>set_value('email_pelanggan', $pelanggan[0]->email_pelanggan),
			'namaD_pelanggan' =>set_value('namaD_pelanggan', $pelanggan[0]->namaD_pelanggan),
			'namaB_pelanggan' =>set_value('namaB_pelanggan', $pelanggan[0]->namaB_pelanggan),
			'pass_pelanggan' =>set_value('pass_pelanggan', $pelanggan[0]->pass_pelanggan),
			'alamat_pelanggan' =>set_value('alamat_pelanggan', $pelanggan[0]->alamat_pelanggan),
			'kota' => $this->Queryeksekusi->selectKota(),
			'action'	=>site_url('Profilakun/edit_aksi'),
			'button'	=>'Perbaharui'
		);
		$this->load->view('profil/editProfil_form', $data);
	}
	function edit_aksi(){
		$data=array(
			'namaD_pelanggan'		=>$this->input->post('namaD_pelanggan'),
			'namaB_pelanggan'		=>$this->input->post('namaB_pelanggan'),
			'pass_pelanggan'		=>$this->input->post('pass_pelanggan'),
			'alamat_pelanggan'		=>$this->input->post('alamat_pelanggan'),
			'id_kota'				=>$this->input->post('id_kota')
		);
		$email_pelanggan = $this->input->post('email_pelanggan');
		$this->Queryeksekusi->editAkunPelanggan($email_pelanggan, $data); 
		redirect(site_url('Profilakun'));
	}

}
?>