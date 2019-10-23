<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_topmenu()
	{
		return '
		<ul class="nav navbar-nav">
			<li><a href="'.base_url().'">Beranda</a></li>
			<li><a href="'.site_url('Semuabarang').'">Semua Barang</a></li>
			<li><a href="'.site_url('Kontak').'">Kontak Kami</a></li>
		</ul>';
		
	}

	function generate_sidemenu()
	{
		return '
		<li id=menu-home>
			<a href="'.site_url('Berandaadmin').'"><i class="fa fa-home"></i> <span>Beranda</span></a>
		</li>
		<li id=menu-home>
		<a href="'.site_url('Barang').'"><i class="fa fa-list"></i> <span>Barang</span></a>
		</li>
		<li id=menu-home>
		<a href="'.site_url('Pelanggan').'"><i class="fa fa-users"></i> <span>Pelanggan</span></a>
		</li>
		<li id=menu-home>
		<a href="'.site_url('Penjualan').'"><i class="fa fa-bar-chart"></i> <span>Penjualan</span></a>
		</li>
		<li id=menu-home>
		<a href="'.site_url('Kota').'"><i class="fa fa-map"></i> <span>Kota</span></a>
		</li>';
		
	}
