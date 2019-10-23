<?php 
/**
* 
*/
class Queryeksekusi extends CI_Model
{

	public $order 				= 'DESC';
	public $Ascen				= 'ASCEN';

	//table Saran
	public $table_saran = 'saran_kritik';
	public $id_saran = 'id_saran';
	public $nama_saran = 'nama_saran';
	public $email_saran = 'email_saran';
	public $komentar_saran = 'komentar_saran';

	//table kota
	public $table_kota	= 'kota';
	public $id_kota		= 'id_kota';
	public $nama_kota	= 'nama_kota';

	//Table Pelanggan
	public $table_pelanggan 	= 'pelanggan';
	public $email_pelanggan 	= 'email_pelanggan';
	public $namaD_pelanggan 	= 'namaD_pelanggan';
	public $namaB_pelanggan 	= 'namaB_pelanggan';
	public $pass_pelanggan 		= 'pass_pelanggan';
	public $alamat_pelanggan 	= 'alamat_pelanggan';
	//table barang
	public $table_barang 		= 'barang';
	public $id					= 'id';
	public $nama_barang 		= 'nama_barang';
	public $deskripsi_barang 	= 'deskripsi_barang';
	public $harga 				= 'harga';
	public $stok_barang 		= 'stok_barang';
	public $gambar 				= 'gambar';
	
	//Table Penjualan
	public $table_penjualan		= 'penjualan';
	public $id_penjualan		= 'id_penjualan';
	public $jumlah_beli			= 'jumlah_beli';
	public $totalHarga			= 'totalHarga';
	public $tanggal_jual		= 'tanggal_jual';
	public $ket					= 'ket';
	//Table Admin
	public $table_admin			= 'admin';
	public $username_admin		= 'username_admin';
	public $password_admin		= 'password_admin';

	function __construct()
	{
		parent::__construct();
	}
//PELANGGAN----------------
//------------------- TAMBAH AKUN PELANGGAN-------------------------------------
	//Tambah Akun Pelanggan
	function tambahAkun($dataPelanggan){
		$this->db->insert($this->table_pelanggan, $dataPelanggan);
	}
//---------------------- EDIT AKUN PELANGGAN -------------------------------
	//Edit Data Akun Pelanggan
	function editAkunPelanggan($email_pelanggan, $dataPelanggan){
		$this->db->where($this->email_pelanggan, $email_pelanggan);
		$this->db->update($this->table_pelanggan, $dataPelanggan);
	}
//------------------- TAMPIL DATA AKUN PELANGGAN -----------------------------------------
	//menampilkan data per Akun Pelanggan
	function tampilAkun($email_pelanggan){
		$this->db->distinct();
 		$this->db->select('p.*, k.nama_kota');
 		$this->db->from('pelanggan p');
 		$this->db->join('kota k', 'k.id_kota = p.id_kota');
 		$this->db->where('p.email_pelanggan', $email_pelanggan);
 		return $this->db->get($this->table_pelanggan)->result();
	}
//tampilkan semua pelanggan
	function tampil_data_pelanggan(){
		$this->db->distinct();
 		$this->db->select('p.*, k.nama_kota');
 		$this->db->from('pelanggan p');
 		$this->db->join('kota k', 'k.id_kota = p.id_kota');
 		return $this->db->get($this->table_pelanggan)->result();
	}

//-----------------Cek Login Pelanggan -------------
	function cek_login_pelanggan($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
//-------------------Hapus Pelanggan
	function hapusPelanggan($email_pelanggan){
			$this->db->where($this->email_pelanggan, $email_pelanggan);
			$this->db->delete($this->table_pelanggan);
	}

	

//ADMIN----------------
	//cek login admin
	function cek_login_Admin($table_admin, $data_login_admin){
		return $this->db->get_where($table_admin, $data_login_admin);
	}


//BARANG
	function tambahBarang($dataBarang){
		$this->db->insert($this->table_barang, $dataBarang);
	}

	function hapusBarang($id){
			$this->db->where($this->id, $id);
			$this->db->delete($this->table_barang);
		}

	function edit_dataBarang($id, $data){
			$this->db->where($this->id, $id);
			$this->db->update($this->table_barang, $data);
		}

	//tampilkan semua barang
	function tampil_data_barang(){
		$this->db->order_by($this->id, $this->Ascen);
		return $this->db->get($this->table_barang)->result();
	}

	//tampilkan barang per id
	function tampil_barang_per_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->table_barang)->result();
	}

	function search($nama_barang)
	{
		$this->db->like('nama_barang',$nama_barang);
		$query  =   $this->db->get($this->table_barang);
		return $query->result();
	}

	function beli($dataBeli){
		return $this->db->insert($this->table_penjualan, $dataBeli);
	}

	function updateStok($stok_tersisa,$id){
		$this->db->query("UPDATE `barang` SET `stok_barang`= $stok_tersisa WHERE id = $id;");
	}

	function SelectPenjualan_per_pelanggan($email_pelanggan){
		$this->db->distinct(); //jika ada data yang sama maka akan ditampilakn cuman satu data saja
 		$this->db->select('p.id_penjualan, p.tanggal_jual, b.gambar, b.nama_barang, p.jumlah_beli, p.totalHarga, p.ket');
 		$this->db->from('penjualan p');
 		$this->db->join('barang b', 'b.id = p.id');
 		$this->db->join('pelanggan pe', 'pe.email_pelanggan = p.email_pelanggan');
 		$this->db->where('p.email_pelanggan', $email_pelanggan);
 		return $this->db->get($this->table_penjualan)->result();
	}

	function SelectPenjualan(){
		$this->db->distinct(); //jika ada data yang sama maka akan ditampilakn cuman satu data saja
 		$this->db->select('p.id_penjualan, p.tanggal_jual, b.gambar, b.nama_barang, pe.namaD_pelanggan,p.jumlah_beli, p.totalHarga, p.ket');
 		$this->db->from('penjualan p');
 		$this->db->join('barang b', 'b.id = p.id');
 		$this->db->join('pelanggan pe', 'pe.email_pelanggan = p.email_pelanggan');
 		return $this->db->get($this->table_penjualan)->result();
	}

	function updateket($id_penjualan, $ket){
		$this->db->query("UPDATE `penjualan` SET `ket`= '$ket' WHERE id_penjualan = $id_penjualan;");
	}


	function selectKota(){
		$this->db->order_by($this->id_kota, $this->Ascen);
		return $this->db->get($this->table_kota)->result();
	}

	function tampilKota($id_kota){
		$this->db->where($this->id_kota, $id_kota);
		return $this->db->get($this->table_kota)->result();
	}

	function editDataKota($id_kota, $data){
			$this->db->where($this->id_kota, $id_kota);
			$this->db->update($this->table_kota, $data);
	}

	function hapusKota($id_kota){
			$this->db->where($this->id_kota, $id_kota);
			$this->db->delete($this->table_kota);
	}

	function tambahKota($dataBarang){
		$this->db->insert($this->table_kota, $dataBarang);
	}

	function insertSaran($data){
		$this->db->insert($this->table_saran, $data);
	}

	function tampilSaran(){
		$this->db->order_by($this->id_saran, $this->order);
		return $this->db->get($this->table_saran)->result();
	}

	function hapusSaran($id_saran){
		$this->db->where($this->id_saran, $id_saran);
		$this->db->delete($this->table_saran);
	}
}
