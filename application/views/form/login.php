<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>FW Medika | Login Akun</title>
	<?php $this->load->view('Include/link-atas'); ?>
</head>
	
<body>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Login</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Akun</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="<?php echo site_url('Loginakun/aksi_login'); ?>" method="POST">
					<input type="email" name="email_pelanggan" placeholder="E-mail Anda" required=" " >
					<input type="password" name="pass_pelanggan" placeholder="Password Anda" required=" " >
					<!-- <div class="forgot">
						<a href="#">Lupa Password</a>
					</div> -->
					<input type="submit" value="Login">
				</form>
			</div>
			<!--<h4>For New People</h4>-->
			<p><a href="<?php echo site_url('Tambahakun/tambah_Akun');?>">Daftar Disini</a> atau Kembali ke <a href="<?php echo base_url(); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- Bootstrap Core JavaScript -->
<?php $this->load->view('Include/link-bawah'); ?>
<!-- Bootstrap Core JavaScript -->
</body>
</html>