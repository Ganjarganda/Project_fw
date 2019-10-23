<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semuabarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Queryeksekusi');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	/*Masih di bagian GUEST---------------------------------------------- */
	public function index()
	{
		$data['data_barang']=$this->Queryeksekusi->tampil_data_barang();
		$this->load->view('semuabarang',$data);
	}
	
	public function DetailBarang($id){
		$DBarang = $this->Queryeksekusi->tampil_barang_per_id($id);
		$dataBarang = array(
			'id' 				=> set_value('id', $DBarang[0]->id),
			'nama_barang' 		=> set_value('nama_barang', $DBarang[0]->nama_barang),
			'deskripsi_barang' 	=> set_value('deskripsi_barang', $DBarang[0]->deskripsi_barang),
			'harga' 			=> set_value('harga', $DBarang[0]->harga),
			'stok_barang' 		=> set_value('stok_barang', $DBarang[0]->stok_barang),
			'gambar' 			=> set_value('gambar', $DBarang[0]->gambar)
		);
		$this->load->view('tampil',$dataBarang);
	}

	function search_keyword() {
        $nama_barang    	=   $this->input->post('nama_barang');
        $data['results']    =   $this->Queryeksekusi->search($nama_barang);
        $this->load->view('hasilPencarian',$data);
    }


	/*Masih di bagian Sudah Login GUEST----------------------------------------------*/
}
