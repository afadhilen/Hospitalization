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
    <br><br>
	<div class ='jumbotron'>
        <center><h3><i>Get information, Get Better</i></h3></center>
    </div>
    <br>
    <div class ='container'>
        <div class ='row top-buffer'>
            <div class='col-lg-8 col-lg-offset-2'>
                 <div class='col-sm-6 col-xs-12'>
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4>Hospitalization Application: </h4> </div>
                        <div class="panel-body ">
                            <ol>
                                <li>Provide Several information about Hospital in Jambi & Cikarang area</li>
                                    List of Hospital :
                                <ul>
                                    <li>  Siloam </li>
                                    <li>  Harapan Keluarga </li>
                                    <li>  Mitra Keluarga</li>
                                    <li>  Annisa </li>
                                    <li>  Hosana Medika</li>
                                </ul>
                                <li>Hospital's list of doctors include schedule links</li>
                                <li>Find your Symptoms specialist</li>
                                <li>Find your doctor</li>
                            </ol>
                            <br><br>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <center><a href ="<?php echo base_url() . 'C_index/home/' ?>"  class ='btn btn-info btn-lg'> Let's Go </a></center>
            </div>
        </div>
    </div>
	</body>
    <?php $this->load->view('includes/nav-footer.php'); ?>
</html>