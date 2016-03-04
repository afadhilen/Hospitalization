<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
	<?php
		include('application/libraries/libs/simple_html_dom.php');

		// $url_1 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=1";
		// $html_1 = file_get_html($url_1);
		// $doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		// $spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');

		$index = 0;
		$inex = 0;
		for($i = 1; $i < 5; $i++){
			$url = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=" . $i;
			$url_array[] = $url;
			foreach ($url_array as $data_url) {
				$html = file_get_html($data_url);
				foreach ($html->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4') as $lists) {
					$datadata[] = $lists->plaintext;
				}
				while($index <= 9){
					$listss[]=$datadata[$index];
					$index = $index + 1;
				}	
				foreach ($listss as $alldata) {
					echo($alldata);
					echo "<br/>";
				}
			}
		}
			// foreach ($url_array as $urls) {
			// 	echo($urls);
			// 	echo "<br/>";
			// }
			
	?>
	</body>
</html>

