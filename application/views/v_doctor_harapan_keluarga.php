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
		<?php 
		echo $name;
		echo "<br/>";
		foreach ($spec as $specialist) {
			echo($specialist);
		}
		?>
		<a href = '<?php echo base_url() . 'c_doctor_siloam/' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a>
	</body>
</html>