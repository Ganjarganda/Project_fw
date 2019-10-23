<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Beranda | Fw Medika Admin</title>
	<?php $this->load->view('HalamanAdmin/Include/link-atas-admin'); ?>
</head>
<body>	
	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<div class="header-main">
					<div class="header-left">
						<div class="logo-name">
							<a href="<?php site_url('Berandaadmin'); ?>"> <h1>FwMedika</h1> 
								<!--<img id="logo" src="" alt="Logo"/>--> 
							</a> 								
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php $this->load->view('HalamanAdmin/Include/header-right-admin'); ?>
					<div class="clearfix"> </div>
					<!-- Helper -->
					<p>
						<?php
						$datestring = 'Hari: %d Bulan: %m Tahun: %Y';
						echo mdate($datestring);
						?>
					</p>	
				</div>
				<!--heder end here-->
				<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset=$(".header-main").offset().top;
						$(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".header-main").addClass("fixed");
							}else{
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">
					<div class="row">
						<table id="example" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>NO.</th>
									<th>Id Saran</th>
									<th>Nama Pemberi Saran</th>
									<th>Email Pemberi Saran</th>
									<th>Komentar</th>

									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_saran as $key => $row) { ?>
								<tr>
									<td><?php echo $key+1;?></td>
									<td><?php echo $row->id_saran; ?></td>
									<td><?php echo $row->nama_saran; ?></td>
									<td><?php echo $row->email_saran; ?></td>
									<td><?php echo $row->komentar_saran; ?></td>
									<td>
										<?php 
										echo anchor(site_url('Berandaadmin/deleteSaran/'.$row->id_saran), '<i class ="fa fa-trash"></i>', 'class="btn btn-danger"');
										?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
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
</body>
</html>                     