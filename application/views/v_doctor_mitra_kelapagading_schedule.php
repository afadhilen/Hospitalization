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
		<?php $this->load->view('includes/nav-header.php'); ?>
		<br>
		<br>
		<br>
		<div class="container">
			<div class='.col-xs-12 .col-sm-6 .col-md-8'>
			<ol class="breadcrumb">
            		<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_kelapagading_home' ?>">Home</a></li>
            		<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_kelapagading' ?>">Data</a></li>
            		<li class="active">Schedule</li>
            	</ol>
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading"><h4>Schedule</h4></div>
					<!-- Table -->
					<table class="table">
						<table class ="table-responsive">
							<center>
								<table class ="table table-striped table-hover">
									<?php foreach ($name_1 as $doc_name_1) { ?>
									<tr>
										<td><?php echo $doc_name_1;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_2 as $doc_name_2) { ?>
									<tr>
										<td><?php echo $doc_name_2;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_3 as $doc_name_3) { ?>
									<tr>
										<td><?php echo $doc_name_3;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_4 as $doc_name_4) { ?>
									<tr>
										<td><?php echo $doc_name_4;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_4 as $doc_name_4) { ?>
									<tr>
										<td><?php echo $doc_name_4;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_5 as $doc_name_5) { ?>
									<tr>
										<td><?php echo $doc_name_5;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_6 as $doc_name_6) { ?>
									<tr>
										<td><?php echo $doc_name_6;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_7 as $doc_name_7) { ?>
									<tr>
										<td><?php echo $doc_name_7;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_8 as $doc_name_8) { ?>
									<tr>
										<td><?php echo $doc_name_8;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_9 as $doc_name_9) { ?>
									<tr>
										<td><?php echo $doc_name_9;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_10 as $doc_name_10) { ?>
									<tr>
										<td><?php echo $doc_name_10;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_11 as $doc_name_11) { ?>
									<tr>
										<td><?php echo $doc_name_11;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_12 as $doc_name_12) { ?>
									<tr>
										<td><?php echo $doc_name_12;?></td>
									</tr>
									<?php } ?>
									<?php foreach ($name_13 as $doc_name_13) { ?>
									<tr>
										<td><?php echo $doc_name_13;?></td>
									</tr>
									<?php } ?>
								</table>
							</center>
						</table>
					</table>
				</div>
			</div>
		</div>
		<!-- <a href = '<?php echo base_url() . 'c_doctor_mitra/' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a> -->
	</body>
</html>