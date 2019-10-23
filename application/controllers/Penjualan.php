<?php 
/**
* 
*/
class Penjualan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Queryeksekusi');
	}
//Tampilan YAng diTampilkan :
	function index(){
		$data['data_penjualan']=$this->Queryeksekusi->SelectPenjualan();
		$this->load->view('HalamanAdmin/Penjualan/penjualan_list_admin',$data);
	}
//----------------------------TAMBAH DATA---------------------------------------------
	
//------------------------------HAPUS DATA-------------------------------------------

	function deletePenjualan($id_penjualan){
		//kirim data ke function hapus_data di mahasiswa_model.php :
		$this->Queryeksekusi->hapusPenjualan($id_penjualan);
		redirect(site_url('Penjualan'));
	}
//----------------------------------EDIT Ket---------------------------------------
	function updateKet($id_penjualan){
		$this->Queryeksekusi->updateket($id_penjualan, "Sudah Bayar");
		redirect(site_url('Penjualan'));
	}
//--------------------------------------------------------------------------
}
?>