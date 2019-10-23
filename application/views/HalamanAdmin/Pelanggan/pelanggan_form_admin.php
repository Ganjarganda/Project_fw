<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Form Pelanggan | Fw Medika Admin</title>
	<?php $this->load->view('HalamanAdmin/Include/link-atas-admin'); ?>
</head>
<body>	
	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<?php $this->load->view('HalamanAdmin/Include/header-main-admin'); ?>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">
					<form action="<?php echo $action; ?>" enctype="multipart/form-data" method="POST" >
						<div class="form-group">
							<label><?php echo $email_pelanggan;?></label>
						</div>
						<div class="form-group">
							<label>Nama Depan</label>
							<input type="text" class="form-control" name="namaD_pelanggan" value="<?php echo $namaD_pelanggan; ?>" placeholder="Nama Depan" required>
						</div>
						<div class="form-group">
							<label>Nama Belakang</label>
							<input type="text" class="form-control" name="namaB_pelanggan" value="<?php echo $namaB_pelanggan; ?>" placeholder="Nama Belakang" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" class="form-control" name="pass_pelanggan" value="<?php echo $pass_pelanggan; ?>" placeholder="Password" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat_pelanggan" value="<?php echo $alamat_pelanggan; ?>" placeholder="Alamat" required>
						</div>
						<label>Kota Tinggal</label>
						<select class="form-control select2" name="id_kota" style="width: 100%;">
							<?php foreach ($kota as $key => $value) { ?>
							<option value="<?php echo $value->id_kota; ?>"><?php echo $value->nama_kota;?></option>
							<?php } ?>
						</select>
						<input type="hidden" name="email_pelanggan" value="<?php echo $email_pelanggan; ?>" />
						
						<br>
						<button type="submit" class="btn btn-primary"><?php echo $button ?> </button>
						<a href="<?php echo site_url('Barang') ?> "class="btn btn-default">Cancel</a>
					</form>
				</div>
				<!--inner block end here-->
				<!--copy rights start here-->
				<?php $this->load->view('HalamanAdmin/Include/footer-admin'); ?>
				<!--COPY rights end here-->
			</div>
		</div>
		<!--slider menu-->
		<?php $this->load->view('HalamanAdmin/Include/sidebar-menu-admin'); ?>
		<div class="clearfix"> </div>
	</div>
	<!--slide bar menu end here-->
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}               
			toggle = !toggle;
		});
	</script>

	<!--scrolling js-->
	<script src="<?php echo base_url()."assets/aset_admin/";?>js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url()."assets/aset_admin/";?>js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url()."assets/aset_admin/";?>js/bootstrap.js"> </script>
	<!-- mother grid end here-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>
</body>
</html>                     