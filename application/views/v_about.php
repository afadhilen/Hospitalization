<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<title>Doctors Data</title>
	</head>
	<body>
		<?php $this->load->view('includes/nav-header.php');?>
		<br>
		<br>
		<br>
		<div class="container">
			<div class='.col-xs-12 .col-sm-6 .col-md-8'>
			<br><br>
				<div class="thumbnail">
				<br>
					<img src="<?php echo base_url('images/jm.jpg');?>" alt="..." class="img-circle" width="100" height="100">
					<div class="caption">
					<h3>About Me</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Mauris accumsan sit amet massa eget pellentesque. 
						Phasellus est ligula, hendrerit quis sodales eleifend, iaculis quis lacus. 
						Nulla pellentesque nulla tortor. Nam lobortis, urna rutrum pretium feugiat, 
						turpis purus feugiat libero, id bibendum nisi lectus ac libero. 
						Proin sed rutrum nunc. Proin convallis libero nec scelerisque tincidunt. 
						Proin mi nulla, pellentesque eget lacinia ac, cursus quis erat. 
						Mauris tempus fermentum mollis. Fusce eget mi eu tortor fringilla aliquam. 
						Duis cursus ornare nisl, sit amet fermentum ante. In et dolor purus. 
						Pellentesque maximus, augue sit amet gravida facilisis, sapien ante feugiat elit, 
						ut facilisis libero diam porta eros. Ut metus diam, egestas sed tempus ac, maximus at mauris. 
						Aenean aliquam dictum bibendum. Vivamus viverra erat non felis maximus, tempus sodales ex rutrum.
						Suspendisse quis risus non justo tempus vehicula vitae et sem.</p>
						<p>
						<a class="btn btn-info" href="https://twitter.com/afadhilen"><i class="fa fa-fw fa-twitter"></i></a>
						<a class="btn btn-warning" href="https://www.instagram.com/afadhilen/"><i class="fa fa-fw fa-instagram"></i></a>
						<a class="btn btn-primary" href="https://id.linkedin.com/in/ahmad-fadhil-naswir-47434ab1"><i class="fa fa-fw fa-linkedin"></i></a>
						</p>
						<p>
						<a class="btn btn-default" href="http://steamcommunity.com/id/afadhilen"><i class="fa fa-fw fa-steam"></i></a>
						<a class="btn btn-primary" href="https://www.facebook.com/profile.php?id=100009543101813"><i class="fa fa-fw fa-facebook"></i></a>
						</p>
					</div>
				</div>
			</div>
			<a class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" style="background:transparent; border:none; color:transparent;"></a>
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="panel-body">
							<div class="form-group">
							<form action="<?php echo base_url() . 'c_admin/admin'; ?>" method='post'>
							<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Restricted area!</div>
  								<p>Security Code</p>
  								<input type="password" class="form-control" id="inputcode" name="inputcode" placeholder="">
  							</div>
  								<input type = "submit" class ='btn btn-default' name = "submit" value=">>">
  							</div>
						</div>
					</div>
				</div>
			</div>
		<?php $this->load->view('includes/nav-footer.php');?>
	</body>
	<!-- style="background:transparent; border:none; color:transparent;" -->
</html>
