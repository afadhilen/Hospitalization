<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
		<title>Admin Page</title>
	</head>
	<body>
    <div class="container">
    <br>
    <br>
        <div class ='row top-buffer'>
            <div class='.col-xs-12 .col-md-8 .col-sm-6'>
                    <ol class="breadcrumb">
                        <li class="active">List</li>
                        <li><a href="<?php echo base_url() . 'c_admin/addadmin' ?>">Add List</a></li>
                    </ol>
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h4>Hospital List</h4></div>
                    <!-- Table -->
                        <table class ="table-responsive">
                        <center>
                            <table class ="table table-striped table-hover">
                                <thead>
                                <th>No</th>
                                <th>Hospital Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th></th>
                                </thead>
                                <?php
                                 foreach ($list_hospital as $data => $value) { 
                                    ?>
                                    <tr>
                                        <td><?= $value['no']; ?></td>
                                        <td><?= $value['name']; ?></td>
                                        <td><?= $value['address']; ?></td>
                                        <td><?= $value['phone']; ?></td>
                                        <td><?= $value['email']; ?></td>
                                        <td><a class = "glyphicon glyphicon-trash" href="<?= site_url("c_admin/delete/{$value['no']}") ?>"></a></td>
                                    </tr>
                               <?php } ?>
                            </table>
                        </center>
                        </table>
                    </div>
                    <a href = "<?php echo base_url() . 'c_index/about'; ?>" class="btn btn-default btn-sm"><<</a>
                </div>
            </div>
        </div>
	</body>
</html>