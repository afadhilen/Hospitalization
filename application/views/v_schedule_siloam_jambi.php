<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
	<title>Doctors Data</title>
</head>
<body>
	<?php $this->load->view('includes/nav-header.php');?>
	<br><br><br><br>
	<div class="container">
		<div class='.col-xs-12 .col-sm-6 .col-md-8'>
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Schedule</h3></div>
				<?php
				$list = array();
				$list_2 = array();
				$indx = 0;

				while($indx <= count($link_doctor)){
					if($indx > count($link_doctor)){
						die();
					}
					else{
						if(!isset($link_doctor[$indx])) {
							$link_doctor[$indx] = 0;
						}
						else{
							$list[]=$link_doctor[$indx];	
						}
					}
					$indx = $indx + 3;
				} ?>
				<table class="table">
					<table class ="table-responsive">
						<center>
							<table class ="table table-striped table-hover">
								<tr>
									<th>Doctor Name</th>
								</tr>
								<?php foreach ($list as $links) { ?>
								<tr>
									<td><?php echo $links;?></td>
								</tr>
								<?php } ?>
								
							</table>
						</table>
					</table>
				</div>
			</div>
		</div>
	</body>
	</html>