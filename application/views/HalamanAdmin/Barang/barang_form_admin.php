<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Form Barang | Fw Medika Admin</title>
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
					<form role="form" action="<?php echo $action; ?>" enctype="multipart/form-data" method="POST" >
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>" placeholder="Nama Barang" required>
						</div>
						<div class="form-group">
							<label>Deskripsi Barang</label>
							<input type="text" class="form-control" name="deskripsi_barang" value="<?php echo $deskripsi_barang; ?>" placeholder="Deskripsi Barang" required>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>" placeholder="Harga Barang" required>
						</div>
						<div class="form-group">
							<label>Stok Harga</label>
							<input type="text" class="form-control" name="stok_barang" value="<?php echo $stok_barang; ?>" placeholder="Stok Barang" required>
						</div>
						<div class="form-group">
							<label class="btn btn-default btn-file">Browse..
								<input type="file" name="gambar">
							</label>
						</div>
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
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