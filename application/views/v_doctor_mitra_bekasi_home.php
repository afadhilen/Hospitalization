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
          <ol class="breadcrumb">
                <li class="active">Home</li>
                <li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi' ?>">Data</a></li>
                <li><a href="<?php echo base_url() . 'c_doctor_mitra_schedule/mitra_bekasi' ?>">Schedule</a></li>
              </ol>
            <div class="panel panel-default">
                    <!-- Default panel contents -->
                <div class="panel-heading"><h3>Hospital Information</h3></div>
                  <div class="panel-body">
                    <?php foreach ($list_data as $data) { ?>
                    <h4><?php echo $data['name'];?></h4>
                    <h4>Address: </h4>  <?php echo $data['address'];?>        
                    <h4>Contact: </h4>  <?php echo $data['phone'];?>       
                    <h4>Email: </h4>  <?php echo $data['email'];?>
                    <?php } ?>
                  </div>
               </div>
           </div>
       </div>
		<!-- <a href = '<?php echo base_url() . 'c_index/home' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a> -->
	</body>
</html>