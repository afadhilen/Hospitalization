<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">

		<title>Find Your Doctor</title>
	</head>
	<body>
		<?php $this->load->view('includes/nav-header.php'); ?>
		<br><br><br><br>
		<div class = "container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Find Your Doctor Here</h3>
				</div>
				<div class="panel-body">
					<div class="col-lg-6">
						<form name = "form-search" method="post" action="<?php echo site_url('c_index/search');?>"  class="form-horizontal">
							<div class="input-group">
								<input name="search" type="text" size="40" maxlength="50" class="form-control" placeholder="Type name..."/>
								<span class="input-group-btn">
									<input name="submit" type="submit" value="Search" class="btn btn-info btn-md"/>
								</span>
							</div><!-- /input-group -->
						</form>
						<br>
						<form name = "form-search" method="post" action="<?php echo site_url('c_index/search');?>"  class="form-horizontal">
							<p>
								<label for="select_hospital"></label>
								<select name="select_hospital" id="select_hospital" onchange="this.form.submit()">
									<option>--Hospital--</option>
									<?php 
									if(isset($data_hosp)){
									foreach($data_hosp as $row_hosp) { ?>
									<option value="<?php echo $row_hosp['no']?>"><?php echo $row_hosp['name']?></option>
									<?php }} ?>
								</select>
							</p>
							<p>
								<label for="select_specialist"></label>
								<?php
						 			if(isset($result1)){
						 				print($result1);
						 			}
						 		?>
						 	</p>
					 	</form>
					</div>
				</div>
				<table class ="table-responsive table table-striped table-hover">
						<?php
							 if(isset($result2)){ ?>
		                       	<th>No-Entry</th>
		                        <th>Doctor Name</th>
		                        <th>Specialist</th>
		                        <th>Hospital</th>
		                        <th></th>
		                        <th>Schedule</th>
		                        <th></th>
		                 <tr>
							<?php
							 	print($result2);
							 	}			 
							?>
						</tr>
					</table>
				<br/>
				<table class ="table-responsive table table-striped table-hover">
				<?php
					 if(isset($result)){ ?>
                       	<!-- <th>No-Entry</th>
                        <th>Doctor Name</th>
                        <th>Specialist</th>
                        <th>Hospital</th>
                        <th></th>
                        <th>Schedule</th>
                        <th></th> -->
                 <tr>
					<?php
					 	print($result);
					 	}			 
					?>
				</tr>
				</table>
			</div>
			<!-- /.col-lg-6 -->
			
			<br/>
			<!-- <a href = '<?php echo base_url() . 'c_index/home' ?>' class="btn btn-default btn-sm" size="15"> Back </a> -->
		</div>
		
	</body>
</html>