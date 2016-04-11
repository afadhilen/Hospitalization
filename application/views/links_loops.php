<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
	<?php
		include('application/libraries/libs/simple_html_dom.php');

		$url_1 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=1";
		$url_2 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=2";
		$html_1 = file_get_html($url_1);
		$html_2 = file_get_html($url_2);
		$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
		$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');

		$index = 0;
		$index2 = 0;
		$counter1 = 0;
		$counter2 = 0;
		$data = array();

		foreach ($doc_name_1 as $table_list) {
				$table_list = $html_1->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter1);
				$data1[] = $table_list;
				$counter1 = $counter1 + 1;
			}
		foreach ($doc_name_2 as $table_list2) {
				$table_list2 = $html_2->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter2);
				$data2[] = $table_list2;
				$counter2 = $counter2 + 1;
			}
		
		while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$index = $index + 1;
			}
		foreach ($list1 as $dazt) {
			echo($dazt);
			echo "<br>";
		}
		foreach ($list2 as $dazt1) {
			echo($dazt1);
			echo "<br>";
		}

		echo(count(array_merge($list1,$list2)));
	?>
	</body>
</html>

