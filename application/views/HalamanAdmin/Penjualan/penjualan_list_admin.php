<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>List Penjualan | Fw Medika Admin</title>
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
					<div class="row">
						<div class="col-md-12 text-right">
							<div style="margin-top:20px; margin-bottom:10px;"></div>
						</div>
					</div>
					<div class="row">
						<table id="example" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>NO.</th>
									<th>ID Penjualan</th>
									<th>Tanggal Jual</th>
									<th>Gambar</th>
									<th>Barang</th>
									<th>Pembeli</th>
									<th>Kuantitas</th>
									<th>Total Harga</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_penjualan as $key => $row) { ?>
								<tr>
									<td><?php echo $key+1;?></td>
									<td><?php echo $row->id_penjualan;?></td>
									<td><?php echo $row->tanggal_jual; ?></td>
									<td><img height="60" width="50" title=" " alt=" " src="<?php echo base_url()."assets/images/".$row->gambar;?>" /></td>
									<td><?php echo $row->nama_barang; ?></td>
									<td><?php echo $row->namaD_pelanggan; ?></td>
									<td><?php echo $row->jumlah_beli; ?></td>
									<td><?php echo $row->totalHarga;?></td>
									<td><?php echo $row->ket;?></td>
									<td>
										<?php 
										echo anchor(site_url('Penjualan/updateKet/'.$row->id_penjualan), '<i class ="fa fa-thumbs-o-up"></i>', 'class="btn btn-warning"');
										?>
										<?php 
										echo anchor(site_url('Penjualan/deletePenjualan/'.$row->id_penjualan), '<i class ="fa fa-trash"></i>', 'class="btn btn-danger"');
										?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<?php 
					$keuntungan = 0;
					foreach ($data_penjualan as $key => $row) {
						$keuntungan += $row->totalHarga;
					}
					?>
					<h1>Total : <?php echo "$keuntungan</h1>" ?>
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