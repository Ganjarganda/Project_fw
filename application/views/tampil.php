		<!--
		author: W3layouts
		author URL: http://w3layouts.com
		License: Creative Commons Attribution 3.0 Unported
		License URL: http://creativecommons.org/licenses/by/3.0/
	-->
	<!DOCTYPE html>
	<html>
	<head>
		<title>FW Medika | Tampil Barang</title>
		<?php $this->load->view('Include/link-atas'); ?>
	</head>
	<body>
		<!-- Header -->
		<!-- //Header -->
		<!-- Navigation -->
		<?php $this->load->view('Include/header-navigation'); ?>
		<!-- //Navigation -->
		<!-- //navigation -->
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
					<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
					<li class="active">Tampil Barang</li>
				</ol>
			</div>
		</div>
		<!-- //breadcrumbs -->
		<div class="products">
			<div class="container">
				<div class="agileinfo_single">
					<div class="col-md-4 agileinfo_single_left">
						<img id="example" src="<?php echo base_url()."assets/images/".$gambar;?>" alt=" " class="img-responsive">
					</div>
					<div class="col-md-8 agileinfo_single_right">
						<h2><?php echo $nama_barang; ?></h2>
						<div class="w3agile_description">
							<h4>Deskripsi :</h4>
							<p>
								<?php echo $deskripsi_barang; ?>
							</p>
						</div>
						<div class="snipcart-item block">
							<div class="snipcart-thumb agileinfo_single_right_snipcart">
								<h4 class="m-sing">Rp. <?php echo $harga;?>,00</h4>
							</div>
							<div class="snipcart-thumb agileinfo_single_right_snipcart">
								<h4 class="m-sing">Stok Tersedia : <?php echo $stok_barang;?></h4>
							</div>
							<div class="snipcart-details agileinfo_single_right_details">
								<?php
								if(!$this->session->userdata("email_pelanggan")==true) { 
									?>
									<form action="<?php echo site_url('Loginakun');?>" method="post">
										<fieldset>
											<!-- <input type="hidden" name="cmd" value="_cart">-->
											<select class="form-control" id="sel1" name="jumlah_beli">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
											<br />
											<input type="hidden" name="id_barang" value=" ">
											<input type="hidden" name="harga_barang" value=" ">
											<input type="submit" name="submit" value="Login Dulu" class="button">
										</fieldset>
									</form>
									<?php 
								} else {
									?>
									<form action="<?php echo site_url('Belibarang'); ?>" method="post">
										<fieldset>
											<!-- <input type="hidden" name="cmd" value="_cart">-->
											<select class="form-control" id="sel1" name="jumlah_beli">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
											<br />
											<input type="hidden" name="id" value="<?php echo $id;?>">
											<input type="hidden" name="stok_barang" value="<?php echo $stok_barang;?>">
											<input type="hidden" name="harga" value="<?php echo $harga; ?>">
											<input type="submit" name="submit" value="Beli Barang" class="button">
										</fieldset>
									</form>
									<?php
								} 
								?>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- new -->

		<!-- //new -->
		<!-- footer -->
		<?php $this->load->view('Include/footer')?>
		<!-- //footer -->
		<!-- Bootstrap Core JavaScript -->
		<?php $this->load->view('Include/link-bawah')?>
		<!-- //Bootstrap Core JavaScript -->
	</body>
	</html>