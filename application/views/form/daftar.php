<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>FW Medika | Daftar Akun</title>
	<?php $this->load->view('Include/link-atas'); ?>
</head>

<body>
	
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Daftar</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Daftar Akun</h2>
			<div class="login-form-grids">
			<!--
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
			-->
			<h6>Informasi Akun</h6>
			<form action="<?php echo $action; ?>" method="post">
				<input type="text" name="namaD_pelanggan" value="<?php echo $namaD_pelanggan; ?>" placeholder="Nama Depan" required=" " >
				<input type="text" name="namaB_pelanggan" value="<?php echo $namaB_pelanggan; ?>" placeholder="Nama Belakang" required=" " >
				<input type="text" name="alamat_pelanggan" value="<?php echo $alamat_pelanggan;?>" placeholder="Alamat Anda" required=" " >
				<input type="email" name="email_pelanggan" value="<?php echo $email_pelanggan;?>" placeholder="E-mail Anda" required=" " >
				<input type="password" name="pass_pelanggan" value="<?php echo $pass_pelanggan;?>" placeholder="Password Anda" required=" " >
				<label>Kota Tinggal</label>
				<select class="form-control select2" name="id_kota" style="width: 100%;">
						<?php foreach ($kota as $key => $value) { ?>
						<option value="<?php echo $value->id_kota; ?>"><?php echo $value->nama_kota;?></option>
						<?php } ?>
				</select>

				
				<!--
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
				-->
				<input type="submit" value="Daftar">
			</form>
		</div>
	<!--
		<div class="register-home">
			<a href="index.html">Home</a>
		</div>
	-->
</div>
</div>
<!-- //register -->	
<!-- Bootstrap Core JavaScript -->
<?php $this->load->view('Include/link-bawah'); ?>
<!-- //Bootstrap Core JavaScript -->
</body>
</html>