<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Tentang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('Queryeksekusi');
	}

	public function index(){
		$this->load->view('tentangkami');
	}

}
?>