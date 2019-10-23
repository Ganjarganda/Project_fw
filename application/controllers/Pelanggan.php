<?php 
/**
* 
*/
class Pelanggan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}
//Tampilan YAng diTampilkan :
	function index(){
		$data['data_pelanggan']=$this->Queryeksekusi->tampil_data_pelanggan();
		$this->load->view('HalamanAdmin/Pelanggan/pelanggan_list_admin',$data);
	}
//----------------------------TAMBAH DATA---------------------------------------------
	
//------------------------------HAPUS DATA-------------------------------------------

	function deletePelanggan($email_pelanggan){
		//kirim data ke function hapus_data di mahasiswa_model.php :
		$this->Queryeksekusi->hapusPelanggan($email_pelanggan);
		redirect(site_url('Pelanggan'));
	}
//----------------------------------EDIT DATA---------------------------------------
	function editPelanggan($email_pelanggan){
		$pelanggan=$this->Queryeksekusi->tampilAkun($email_pelanggan);
		$data=array(
			'email_pelanggan'		=>set_value('email_pelanggan', $pelanggan[0]->email_pelanggan),
			'namaD_pelanggan'		=>set_value('namaD_pelanggan', $pelanggan[0]->namaD_pelanggan),
			'namaB_pelanggan'		=>set_value('namaB_pelanggan', $pelanggan[0]->namaB_pelanggan),
			'pass_pelanggan'		=>set_value('pass_pelanggan', $pelanggan[0]->pass_pelanggan),
			'alamat_pelanggan'		=>set_value('alamat_pelanggan', $pelanggan[0]->alamat_pelanggan),
			'kota' 					=> $this->Queryeksekusi->selectKota(),
			'action'				=>site_url('Pelanggan/edit_aksi'),
			'button'				=>'Edit'
		);
		$this->load->view('HalamanAdmin/Pelanggan/pelanggan_form_admin', $data);
	}
	function edit_aksi(){
		$data=array(
			'namaD_pelanggan'	=>$this->input->post('namaD_pelanggan'),
			'namaB_pelanggan'	=>$this->input->post('namaB_pelanggan'),
			'pass_pelanggan'	=>$this->input->post('pass_pelanggan'),
			'alamat_pelanggan'	=>$this->input->post('alamat_pelanggan'),
			'id_kota'			=>$this->input->post('id_kota')
		);
		$email_pelanggan = $this->input->post('email_pelanggan');
		$this->Queryeksekusi->editAkunPelanggan($email_pelanggan, $data); 
		redirect(site_url('Pelanggan'));
	}
//--------------------------------------------------------------------------
}
?>