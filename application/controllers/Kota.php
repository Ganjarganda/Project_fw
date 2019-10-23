<?php 
/**
* 
*/
class Kota extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}
//Tampilan YAng diTampilkan :
	function index(){
		$data['data_kota']=$this->Queryeksekusi->selectKota();
		$this->load->view('HalamanAdmin/Kota/kota_list_admin',$data);
	}
//----------------------------TAMBAH DATA---------------------------------------------

	public function tambahKota(){
		$data=array(
			'action'			=>site_url('Kota/tambah_aksi'),
			'id_kota'			=>set_value('id_kota'),
			'nama_kota'			=>set_value('nama_kota'),
			'button'			=>'Tambah' //Value Button = "Tambah"
		);
		$this->load->view('HalamanAdmin/Kota/kota_form_admin', $data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_kota'		=>$this->input->post('nama_kota'),
		);
		$this->Queryeksekusi->tambahKota($data);
		redirect(site_url('Kota'));
	}
	
//------------------------------HAPUS DATA-------------------------------------------

	function deleteKota($id_kota){
		//kirim data ke function hapus_data di mahasiswa_model.php :
		$this->Queryeksekusi->hapusKota($id_kota);
		redirect(site_url('Kota'));
	}
//----------------------------------EDIT DATA---------------------------------------
	function editKota($id_kota){
		$kota=$this->Queryeksekusi->tampilKota($id_kota);
		$data=array(
			'id_kota'				=>set_value('id_kota', $kota[0]->id_kota),
			'nama_kota'				=>set_value('nama_kota', $kota[0]->nama_kota),
			'action'				=>site_url('Kota/edit_aksi'),
			'button'				=>'Edit'
		);
		$this->load->view('HalamanAdmin/Kota/kota_form_admin', $data);
	}
	function edit_aksi(){
		$data=array(
			'nama_kota'	=>$this->input->post('nama_kota')
		);
		$id_kota = $this->input->post('id_kota');
		$this->Queryeksekusi->editDataKota($id_kota, $data); 
		redirect(site_url('Kota'));
	}
//--------------------------------------------------------------------------
}
?>