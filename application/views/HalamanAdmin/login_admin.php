<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login Admin | Fw Medika Admin</title>
<?php $this->load->view('HalamanAdmin/Include/link-atas-admin'); ?>
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login Admin Fw Medika</h1>
			</div>
			<div class="login-block">
				<form role="form" action="<?php echo site_url('Loginadmin/aksi_login'); ?>" method="POST">
					<input type="text" name="username_admin" placeholder="Username" required="">
					<input type="password" name="password_admin" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php $this->load->view('HalamanAdmin/Include/footer-admin'); ?>
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="<?php echo base_url()."assets/aset_admin/";?>js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url()."assets/aset_admin/";?>js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url()."assets/aset_admin/";?>js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
