		<!-- header -->
		<div class="agileits_header">
			<div class="container">
				<div class="w3l_offers">
					<!-- Helpers -->
					<p>
						<?php
						$datestring = 'Hari: %d Bulan: %m Tahun: %Y';
						echo mdate($datestring);
						?>
					</p>
					<!-- <p>Website ini hanya untuk Project Kuliah Prodi TI. <a href="https://pcr.ac.id/">Politeknik Caltex Riau</a></p> -->
				</div>
				<div class="agile-login">
					<?php 
					if(!$this->session->userdata("email_pelanggan")==true) { 
						?>
						<ul>
							<li><a href="<?php echo site_url('Tambahakun/tambah_Akun');?>">Daftar</a></li>
							<li><a href="<?php echo site_url('Loginakun');?>">Login</a></li>
							<!--<li><a href="contact.html">Help</a></li>-->
						</ul>
						<?php
					}else { ?>
					<ul>
						<?php
//Mencari Nama Dari email yang sudah login 
						$email_pelanggan = $this->session->userdata('email_pelanggan');
						$query = $this->db->query("SELECT namaD_pelanggan FROM pelanggan WHERE email_pelanggan = '$email_pelanggan';");
						foreach ($query->result() as $row)
							{ ?>
								<li><a href="<?php echo site_url('Profilakun');?>"><?php echo $row->namaD_pelanggan; } ?></a></li>
								<li><a href="<?php echo site_url('Loginakun/logout');?>">Log out</a></li>
								<!--<li><a href="contact.html">Help</a></li>-->
							</ul>
							<?php 
						} 
						?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="logo_products">
				<div class="container">
					<div class="w3ls_logo_products_left1">
						<ul class="phone_email">
							<!-- <li><i class="fa fa-phone" aria-hidden="true"></i>Butuh Bantuan : (021) 222-1111</li>-->
						</ul>
					</div>
					<div class="w3ls_logo_products_left">
						<h1><a href="<?php echo base_url();?>">FW Medika</a></h1>
					</div>
					<div class="w3l_search">
						<form action="<?php echo site_url('Welcome/search_keyword');?>	" method="post">
							<input type="search" name="nama_barang" placeholder="Nama Obat..." required="">
							<button type="submit" class="btn btn-default search" aria-label="Left Align">
								<i class="fa fa-search" aria-hidden="true"> </i>
							</button>
							<div class="clearfix"></div>
						</form>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header -->
			<!-- navigation -->
			<div class="navigation-agileits">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<?php echo generate_topmenu();?>
						</div>
					</nav>
				</div>
			</div>
		<!-- //navigation -->