<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
	<?php
		include('application/libraries/libs/simple_html_dom.php');

		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";		
		$html = file_get_html($url);
		$specialist = $html->find('li[class="row"] h4');
		$doctor = $html->find('div[class="col-md-10"] a h3');
		$data1 = array();

		foreach ($specialist as $alldata) {
			echo($alldata);
			echo "<br/>";
		}
		echo "<hr>";
		foreach ($doctor as $alldata1) {
			echo($alldata1);
			echo "<br/>";
		}

		echo "Test Success";
    ?>