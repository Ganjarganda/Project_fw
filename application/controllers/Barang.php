<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Queryeksekusi');
		$this->load->helper(array('form','url'));
	}
//Tampilan YAng diTampilkan :
	function index(){
		$data['data_barang']=$this->Queryeksekusi->tampil_data_barang();
		$this->load->view('HalamanAdmin/Barang/barang_list_admin',$data);
	}
//----------------------------TAMBAH DATA---------------------------------------------
	public function tambahBarang(){
		$data=array(
			'action'			=>site_url('Barang/tambah_aksi'),
			'nama_barang'		=>set_value('nama_barang'),
			'deskripsi_barang'	=>set_value('deskripsi_barang'),
			'harga'				=>set_value('harga'),
			'stok_barang'		=>set_value('stok_barang'),
			//'gambar'		=>set_value('gambar'),
			'id'				=>set_value('id'),
			'button'			=>'Tambah' //Value Button = "Tambah"
		);
		$this->load->view('HalamanAdmin/Barang/barang_form_admin', $data);
	}
	function tambah_aksi(){

		$this->load->library('upload');
        $nmfile 					= "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] 		= './assets/images/'; //path folder --> tempat Simpan Gambar nya
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] 		= '3072'; //maksimum besar file 3M
        $config['max_width']  		= '5000'; //lebar maksimum 5000 px
        $config['max_height']  		= '5000'; //tinggi maksimu 5000 px
        $config['file_name'] 		= $nmfile; //nama yang terupload nantinya --> harus menggunakan file_name , kalau gak error

        $this->upload->initialize($config);
        if($_FILES['gambar']['name']) {
        	if ($this->upload->do_upload('gambar')) {
        		$gbr = $this->upload->data();
        		$data=array(
        			'gambar'			=>$gbr['file_name'],
        			'nama_barang'		=>$this->input->post('nama_barang'),
        			'deskripsi_barang'	=>$this->input->post('deskripsi_barang'),
        			'harga'				=>$this->input->post('harga'),
        			'stok_barang'		=>$this->input->post('stok_barang')
        		);
        		$this->Queryeksekusi->tambahBarang($data);
        		redirect(site_url('Barang'));
        	}else{
        		echo " error ";
        	}
        }
    }

//------------------------------HAPUS DATA-------------------------------------------

    function deleteBarang($id){
		//kirim data ke function hapus_data di mahasiswa_model.php :
    	$this->Queryeksekusi->hapusBarang($id);
    	redirect(site_url('Barang'));
    }
//----------------------------------EDIT DATA---------------------------------------
    function editBarang($id){
    	$brg=$this->Queryeksekusi->tampil_barang_per_id($id);
    	$data=array(
    		'id'				=>set_value('id', $brg[0]->id),
    		'nama_barang'		=>set_value('nama_barang', $brg[0]->nama_barang),
    		'deskripsi_barang'	=>set_value('deskripsi_barang', $brg[0]->deskripsi_barang),
    		'harga'				=>set_value('harga', $brg[0]->harga),
    		'stok_barang'		=>set_value('stok_barang', $brg[0]->stok_barang),
			//'gambar'			=>set_value('gambar', $brg[0]->gambar),
    		'action'			=>site_url('Barang/edit_aksi'),
    		'button'			=>'Edit'
    	);
    	$this->load->view('HalamanAdmin/Barang/barang_form_admin', $data);
    }
    function edit_aksi(){

        $this->load->library('upload');
        $nmfile                     = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path']      = './assets/images/'; //path folder --> tempat Simpan Gambar nya
        $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size']         = '3072'; //maksimum besar file 3M
        $config['max_width']        = '5000'; //lebar maksimum 5000 px
        $config['max_height']       = '5000'; //tinggi maksimu 5000 px
        $config['file_name']        = $nmfile; //nama yang terupload nantinya --> harus menggunakan file_name , kalau gak error

        $this->upload->initialize($config);
        if($_FILES['gambar']['name']) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                $data=array(
                    'gambar'            =>$gbr['file_name'],
                    'nama_barang'       =>$this->input->post('nama_barang'),
                    'deskripsi_barang'  =>$this->input->post('deskripsi_barang'),
                    'harga'             =>$this->input->post('harga'),
                    'stok_barang'       =>$this->input->post('stok_barang')
                );
                $id = $this->input->post('id');
                $this->Queryeksekusi->edit_dataBarang($id, $data); 
                redirect(site_url('Barang'));
            }else{
                echo " error ";
            }
        }
    }
//--------------------------------------------------------------------------
}
