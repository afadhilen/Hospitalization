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
	<table>
	<tr>
		<!-- <th>Doctor No-Entry</th>
		<th>Doctor Name</th>
		<th>Doctor Specialist</th>
		<th>Hospital Name</th>
		<th>Hospital Address</th> -->
	</tr>
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
	</table>
		<a href = '<?php echo base_url() . 'c_doctor_mitra/' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a>
	</body>
</html>