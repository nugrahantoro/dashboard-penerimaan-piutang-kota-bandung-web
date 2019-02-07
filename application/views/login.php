<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BPPD KOTA BANDUNG</title>
	<link type="text/css" href="<?php echo base_url()?>assets/template/code/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url()?>assets/template/code/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url()?>assets/template/code/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url()?>assets/template/code/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
			  	<a class="brand" href="login">
			  		<?php
            	$q = "SELECT * FROM ref_web";
              $b = $this->db->query($q)->result();
              foreach ($b as $hasil) {}
              echo $hasil->nama_web;
            ?>
			  	</a>
				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<!-- li><a href="#">
							Forgot your password?
						</a></li> -->
					</ul>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post" action="<?php echo base_url()?>index.php/login/act_login">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="username" name="username" placeholder="Username" required="">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" name="password" placeholder="Password" required="">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-success pull-right">Login</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<b class="copyright">@</b>BPPD KOTA BANDUNG.
		</div>
	</div>
	<script src="<?php echo base_url()?>assets/template/code/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/template/code/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/template/code/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
