<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>FW Medika | Beranda</title>
	<?php $this->load->view('Include/link-atas'); ?>
</head>
<body>
	<!-- Header -->
	<!-- //Header -->
	<!-- Navigation -->
	<?php $this->load->view('Include/header-navigation'); ?>
	<!-- //Navigation -->
	
	<!-- main-slider -->
	<!-- <?php //$this->load->view('Include/main-slider'); ?> -->
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h2>Semua Barang</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<!--<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
					</ul>-->
					<div id="myTabContent" class="tab-content">
						<!--<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">-->
							<!-- <div class="agile-tp">
								<h5>Advertised this week</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div> -->

							
							<div class="agile_top_brands_grids">
								<?php 
								foreach ($data_barang as $key => $row) {
									?>
									<div class="col-md-4 top_brand_left">
										<div class="hover14 column">
											<div class="agile_top_brand_left_grid">
												<div class="agile_top_brand_left_grid_pos">
													<img src="<?php echo base_url()."assets/";?>images/offer.png" alt=" " class="img-responsive" />
												</div>
												<div class="agile_top_brand_left_grid1">
													<figure>
														<div class="snipcart-item block" >
															<div class="snipcart-thumb">
																<a href="<?php echo site_url('Welcome/DetailBarang/'.$row->id);?>"><img height="150" width="100" title=" " alt=" " src="<?php echo base_url()."assets/images/".$row->gambar;?>" /></a>	
																<p><?php echo $row->nama_barang;?></p>
															<!-- <div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>-->
															<h4>Rp. <?php echo $row->harga; ?></h4>
														</div>
														<!--<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value="" />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>-->
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<?php
							} 
							?>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //top-brands -->
<!-- Carousel
	================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a> <img class="first-slide" src="<?php echo base_url()."assets/";?>images/Macam-macam-Obat-Herbal.jpg" alt="First slide"></a>

			</div>
			<div class="item">
				<a> <img class="second-slide " src="<?php echo base_url()."assets/";?>images/Jamu-Tetes-Soman-Obat-Herbal.jpg" alt="Second slide"></a>

			</div>
			<div class="item">
				<a><img class="third-slide " src="<?php echo base_url()."assets/";?>images/obat-penyebab-kerusakan-ginjal.jpg" alt="Third slide"></a>

			</div>
		</div>

	</div>
	<!-- //new -->
	<!-- footer -->
	<?php $this->load->view('Include/footer')?>
	<!-- //footer -->
	<!-- Bootstrap Core JavaScript -->
	<?php $this->load->view('Include/link-bawah')?>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>