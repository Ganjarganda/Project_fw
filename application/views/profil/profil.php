<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FW Medika | Akun Pribadi</title>
	<?php $this->load->view('Include/link-atas'); ?>
	
</head>
<body>
	<?php $this->load->view('Include/header-navigation'); ?>
	<!-- Profil -->
	<div class="login">
		<div class="container">
			<h2>Profil Akun</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<table class="tableProfil">
					<?php foreach ($data_pelanggan as $key => $row) { ?>
					<tr>
						<td>EMAIL</td>
						<td>:</td>
						<td><?php echo $row->email_pelanggan;?></td>
						<td><?php echo anchor(site_url('Profilakun/editAkun/'.$row->email_pelanggan), '<i class ="fa fa-pencil"></i>', 'class="btn btn-warning"'); ?>
						</td>
					</tr>
					<tr>
						<td>NAMA</td>
						<td>:</td>
						<td><?php echo $row->namaD_pelanggan." ". $row->namaB_pelanggan;?></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td>:</td>
						<td><?php echo $row->pass_pelanggan;?></td>
					</tr>
					<tr>
						<td>ALAMAT</td>
						<td>:</td>
						<td><?php echo $row->alamat_pelanggan;?></td>
					</tr>
					<tr>
						<td>KOTA TINGGAL</td>
						<td>:</td>
						<td><?php echo $row->nama_kota;?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div class="login">
		<div class="container">
			<h2>Barang Yang Dibeli</h2>
			<br />
			<div class="row">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<th>No. Barang</th>
						<th>Tanggal Beli</th>
						<th>Gambar</th>
						<th>Nama Barang</th>
						<th>Kuantitas</th>
						<th>Total Harga</th>
						<th>Keterangan</th>
					</thead>
					<tbody>
						<?php
							foreach ($data_dibeli as $key => $row) {?>
							<tr>
								<?php $row->id_penjualan; ?><!-- Ini hanya ambil id_penjualannya, gak ditampilkan di web-->
								<td><?php echo $key+1; ?></td>
								<td><?php echo $row->tanggal_jual; ?></td>
								<td><img width="100px" height="100px" src="<?php echo base_url()."assets/images/".$row->gambar;?>"></td>
								<td><?php echo $row->nama_barang; ?></td>
								<td><?php echo $row->jumlah_beli; ?></td>
								<td><?php echo $row->totalHarga; ?></td>
								<td><?php echo $row->ket; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Profil -->
	<!-- footer -->
	<?php $this->load->view('Include/footer');?>
	<!-- //footer -->
	<?php $this->load->view('Include/link-bawah')?>
</body>
</html>