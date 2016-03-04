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
    <br><br><br><br><br>
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
                                <thead>
                                <th>No</th>
                                <th>Hospital Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                </thead>
                                <?php foreach ($list_hospital as $data) { ?>
                                    <tr>
                                        <td><?= $data['no']; ?></td>
                                        <td><?= $data['name']; ?></td>
                                        <td><?= $data['address']; ?></td>
                                        <td><?= $data['phone']; ?></td>
                                        <td><?= $data['email']; ?></td>
                                    </tr>
                               <?php } ?>
                            </table>
                        </center>
                        </table>
                    </table>
                </div>
            </div>
            <!-- <center><a href ="<?php echo base_url() . 'c_index/' ?>"  class ='btn btn-default btn-sm'> Back </a></center> -->
            </div>
    <?php $this->load->view('includes/nav-footer.php'); ?>
	</body>
</html>