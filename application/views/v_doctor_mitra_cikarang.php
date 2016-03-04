<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('includes/css.css'); ?>">
		<title>Doctors Data</title>
	</head>
	<body>
	<?php $this->load->view('includes/nav-header.php'); ?>
	<br>
	<br>
	<br>
	<div class="container">
        <div class='.col-xs-12 .col-sm-6 .col-md-8'>
            <div class="panel panel-default">
                    <!-- Default panel contents -->
                <div class="panel-heading"><h4>Hospital Data</h4></div>
                    <!-- Table -->
                <table class="table">
                    <table class ="table-responsive">
                       	<center>
                       		<table class ="table table-striped table-hover">
                       			<tr>
                       				<th>Doctor No-Entry</th>
                       				<th>Doctor Name</th>
                       				<th>Doctor Specialist</th>
                       				<th>Hospital Name</th>
                       			</tr>
                       			<?php foreach ($list_data as $data) { ?>
                       			<tr>
                       				<td><?php echo $data['no'];?></td>
                       				<td><?php echo $data['name'];?></td>
                       				<td><?php echo $data['specialist'];?></td>
                       				<td><?php echo $data['hospital'];?></td>
                       			</tr>
                       			<?php } ?>
                       		</table>
                       	</center>
                       </table>
                   </table>
               </div>
           </div>
       </div>
		<!-- <a href = '<?php echo base_url() . 'c_index/home' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a> -->
	</body>
</html>