<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FW Medika | Edit Akun Pribadi</title>
	<?php $this->load->view('Include/link-atas'); ?>
	
</head>
<body>
	<?php $this->load->view('Include/header-navigation'); ?>
	<!-- Profil -->
	<div class="login">
		<div class="container">
			<h2>Edit Data Akun</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="<?php echo $action; ?>" method="POST">
					<input type="text" name="namaD_pelanggan" value="<?php echo $namaD_pelanggan;?>" placeholder="Nama Depan Anda" required=" " >
					<input type="text" name="namaB_pelanggan" value="<?php echo $namaB_pelanggan;?>" placeholder="Nama Belakang Anda" required=" " >
					<input type="password" name="pass_pelanggan" value="<?php echo $pass_pelanggan;?>"  placeholder="Password Baru Anda" required=" " >
					<input type="text" name="alamat_pelanggan" value="<?php echo $alamat_pelanggan;?>" placeholder="Alamat Anda" required=" " >
					<label>Kota Tinggal</label>
				<select class="form-control select2" name="id_kota" style="width: 100%;">
						<?php foreach ($kota as $key => $value) { ?>
						<option value="<?php echo $value->id_kota; ?>"><?php echo $value->nama_kota;?></option>
						<?php } ?>
				</select>
					<input type="hidden" name="email_pelanggan" value="<?php echo $email_pelanggan; ?>" />
					<!-- <div class="forgot">
						<a href="#">Lupa Password</a>
					</div> -->
					<input type="submit" value="<?php echo $button;?>">
				</form>
			</div>
			<!--<h4>For New People</h4>-->
			<p><a href="<?php echo site_url('Pelanggan/tambah_Akun');?>">Daftar Disini</a> atau Kembali ke <a href="<?php echo base_url(); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	<!-- Profil -->
	<!-- footer -->
	<?php $this->load->view('Include/footer');?>
	<!-- //footer -->
	<?php $this->load->view('Include/link-bawah')?>
</body>
</html>