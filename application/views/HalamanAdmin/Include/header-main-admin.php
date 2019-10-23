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