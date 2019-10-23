<div class="testi">
	<h3 class="w3_agile_header">Testimonial</h3>
	<!--//End-slider-script -->
	<script src="<?php echo base_url()."assets/"?>js/responsiveslides.min.js"></script>
	<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
							  	auto: true,
							  	pager: false,
							  	nav: true,
							  	speed: 500,
							  	namespace: "callbacks",
							  	before: function () {
							  		$('.events').append("<li>before event fired.</li>");
							  	},
							  	after: function () {
							  		$('.events').append("<li>after event fired.</li>");
							  	}
							  });

							});
						</script>
						<div  id="top" class="callbacks_container">
							
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>" I AM VERY PLEASED.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">John Doe,</a>Adipiscing</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" I AM LOREM IPSUM.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">elit semper,</a>Dolor Elit</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>" CONSECTETUR PIMAGNA.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
										<div class="testi-subscript">
											<p><a href="#">Amet Doe,</a>Suspendisse</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
							</ul>
						</div>
					</div>