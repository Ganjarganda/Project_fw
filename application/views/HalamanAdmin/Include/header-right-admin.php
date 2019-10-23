<div class="header-right">
	<div class="profile_details_left"><!--notifications of menu start -->
		<div class="clearfix"></div>
	</div>
	<!--notification menu end -->
	<div class="profile_details">		
		<ul>
			<li class="dropdown profile_details_drop">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<div class="profile_img">	
						<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
						<div class="user-name">
							<p><?php echo $this->session->userdata('username_admin'); ?></p>
							<span>Administrator</span>
						</div>
						<i class="fa fa-angle-down lnr"></i>
						<i class="fa fa-angle-up lnr"></i>
						<div class="clearfix"></div>	
					</div>	
				</a>
				<ul class="dropdown-menu drp-mnu">
					<li> <a href="<?php echo site_url('Loginadmin/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>				
</div>