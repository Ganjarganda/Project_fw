<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Belibarang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryeksekusi');

		$ambilSession = $this->session->userdata('email_pelanggan');
	}


	function index(){
		//ambil data dari form tampil.php
		$id = $this->input->post('id');
		$stok_barang = $this->input->post('stok_barang');
		$harga = $this->input->post('harga');
		$jumlah_beli= $this->input->post('jumlah_beli');
		$tanggal_jual=date('Y-m-d');//Ambil Tahun-Bulan-Tanggal Saat ini
		//kurangi Stok barang
		$stok_tersisa = $stok_barang - $jumlah_beli;
		//harga yang harus dibayar
		$totalHarga = $jumlah_beli * $harga;

		//jadikan array, pada data yang dibutuhkan untuk table penjualan
		$dataBeli = array(
			'id' => $id ,
			'email_pelanggan' => $this->session->userdata('email_pelanggan'),
			'jumlah_beli' => $jumlah_beli,
			'totalHarga' => $totalHarga,
			'tanggal_jual' => $tanggal_jual,
			'ket' => "Belum Bayar" //keterangan data barang nya default = belum bayar
			);
		$this->Queryeksekusi->beli($dataBeli);
		$this->Queryeksekusi->updateStok($stok_tersisa,$id);
		redirect(site_url('Welcome'));
	}

}

?>