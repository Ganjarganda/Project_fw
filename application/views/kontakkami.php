<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>FW Medika | Kontak Kami</title>
<?php $this->load->view('Include/link-atas') ?>
</head>
	
<body>
<!-- Header -->
	<!-- Navigation -->
	<?php $this->load->view('Include/header-navigation'); ?>
	<!-- //Navigation -->
	<!-- //Header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Kontak Kami</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="about">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6747081362337!2d101.49270921475336!3d0.48613629964532834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ae45c2a04f0f%3A0x9e7a1023e43a43a6!2sJl.+Bukit+Barisan%2C+Tengkerang+Tim.%2C+Tenayan+Raya%2C+Kota+Pekanbaru%2C+Riau!5e0!3m2!1sid!2sid!4v1511012786140" style="border:0"></iframe>
				</div>
				<div class="agileits_w3layouts_map_pos">
					<div class="agileits_w3layouts_map_pos1">
						<h3>Info Kontak</h3>
						<!--<p>1234k Avenue, 4th block, New York City.</p>-->
						<ul class="wthree_contact_info_address">
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Ganjarganda20@gmail.com">Ganjarganda20@gmail.com</a></li>
							<!--<li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>-->
						</ul>
						<!--<div class="w3_agile_social_icons w3_agile_social_icons_contact">
							<ul>
								<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
								<li><a href="#" class="icon icon-cube agile_rss"></a></li>
								<li><a href="#" class="icon icon-cube agile_t"></a></li>
							</ul>
						</div>-->
					</div>
				</div>
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Kritik dan <span> Saran</span></h2>

				<form action="<?php echo site_url('Kontak/inputSaran');?>" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="nama_saran" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Nama Anda</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-26" name="email_saran" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Email Anda</span>
						</label>
					</span>
					<textarea name="komentar_saran" placeholder="Tulis Pesan Anda Disini..." required=""></textarea>
					<input type="submit" value="Kirim">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- contact -->

<!-- footer -->
<?php $this->load->view('Include/footer')?>
<!-- //footer -->	

<!-- Bootstrap Core JavaScript -->
<?php $this->load->view('Include/link-bawah')?>
<!-- //Bootstrap Core JavaScript -->
</body>
</html>