<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <link rel="icon" href="<?php echo base_url(); ?>images/home.png" type="image/gif">
		<title>Hospitalization</title>
	</head>
	<body>
		<?php $this->load->view('includes/nav-header.php'); ?>
    <br>
    <br>
    <div class ='jumbotron'>
        <center><h3><i>Get information, Get Better</i></h3></center>
    </div>
    <div class ='container'>
        <div class ='row top-buffer'>
            <div class='col-lg-8 col-lg-offset-2'>
                 <br><br>
	            	<div class="panel panel-default">
	            		<!-- Default panel contents -->
	            		<div class="panel-heading"><h4>Hospital Information</h4></div>
	            		<!-- Table -->
	            		<table class="table">
	            			<table class ="table-responsive">
		                <center>
							<table class ="table table-striped">
								<h2><th>Hospital List</th>
								<th>Information</th>
								<th></th>
								<th></th>
								</h2>
								<!-- <tr>
									<td>Siloam Hospital</td>
									<td><a href = '<?php echo base_url() . 'c_doctor_siloam/siloam_jambi/' ?>'> Jambi </a></td>
							        <td><a href = '<?php echo base_url() . 'c_doctor_siloam/siloam_cikarang/' ?>'> Cikarang </a></td>
							        <td></td>							        
					        	</tr> -->
					        	<tr>
					        		<td>RS Mitra Keluarga </td>
					        		<td>
					        			<div class="dropdown">
					        				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					        					Select Area
					        					<span class="caret"></span>
					        				</button>
					        				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					        					<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_cikarang_home/' ?>">Cikarang</a></li>
					        					<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi_home/' ?>">Bekasi</a></li>
					        					<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi_timur_home/' ?>">Bekasi Timur</a></li>
					        					<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_kelapagading_home/' ?>">Kelapa Gading</a></li>
					        					<li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_depok_home/' ?>">Depok</a></li>
					        				</ul>
					        			</div>
					        		</td>
					        		<!-- <td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_cikarang/' ?>'> Cikarang </a></td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi/' ?>'> Bekasi </a></td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi_timur/' ?>'> Bekasi Timur </a></td> -->
					        	</tr>
					        	<!-- <tr>
					        		<td>RS Harapan Keluarga </td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_harapan_keluarga/' ?>'> Cikarang </a></td>
					        		<td></td>
					        		<td></td>
					        	</tr>
					        	<tr>
					        		<td>RS Hosana Medica Hospital </td>
					        		<td><a href='<?php echo base_url() . 'c_hosana_medika/' ?>'> Cikarang </a></td>
					        		<td></td>
					        		<td></td>
					        	</tr>
					        	<tr>
					        		<td>RS Annisa</td>
					        		<td><a href='<?php echo base_url() . 'c_annisa/' ?>'> Cikarang </a></td>
					        		<td></td>
					        		<td></td>
					        	</tr> -->
					        </table>
			        	</center>
			        </table>
	            		</table>
	            	</div>

	        <br/>
       		<!-- <a href ="<?php echo base_url() . 'c_index/gethospital' ?>"  class ='btn btn-default btn-sm'> Back </a> -->
    </div>
 </div>
    </div>
 		<?php $this->load->view('includes/nav-footer.php'); ?>
	</body>
</html>