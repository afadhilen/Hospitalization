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
							<table class ="table table-striped table-hover">
								<h2><th>Hospital List</th>
								<th>Information</th>
								<th></th>
								<th></th>
								</h2>
								<tr>
									<td>Siloam Hospital</td>
									<td><a href = '<?php echo base_url() . 'c_doctor_siloam/siloam_jambi/' ?>'> Jambi </a></td>
							        <td><a href = '<?php echo base_url() . 'c_doctor_siloam/siloam_cikarang/' ?>'> Cikarang </a></td>
							        <td></td>							        
					        	</tr>
					        	<tr>
					        		<td>RS Mitra Keluarga </td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_cikarang/' ?>'> Cikarang </a></td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi/' ?>'> Bekasi </a></td>
					        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi_timur/' ?>'> Bekasi Timur </a></td>
					        	</tr>
					        	<tr>
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
					        	</tr>
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