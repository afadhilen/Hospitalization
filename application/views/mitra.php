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
		$url_3 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=3";
		$url_4 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=4";
		$url_5 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=5";
		$html_1 = file_get_html($url_1);
		$html_2 = file_get_html($url_2);
		$html_3 = file_get_html($url_3);
		$html_4 = file_get_html($url_4);
		$html_5 = file_get_html($url_5);
		$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');

		$spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		$spec_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		$spec_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		$spec_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		$spec_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');

		$index = 0;
		$index2 = 0;
		foreach ($doc_name_1 as $table_list) {
			$data1[] = $table_list->plaintext;
		}
		foreach ($doc_name_2 as $table_list) {
			$data2[] = $table_list->plaintext;
		}
		foreach ($doc_name_3 as $table_list) {
			$data3[] = $table_list->plaintext;
		}
		foreach ($doc_name_4 as $table_list) {
			$data4[] = $table_list->plaintext;
		}
		foreach ($doc_name_5 as $table_list) {
			$data5[] = $table_list->plaintext;
		}

		foreach ($spec_name_1 as $all_spec) {
			$data_spec1[] = $all_spec->plaintext;
		}
		foreach ($spec_name_2 as $all_spec) {
			$data_spec2[] = $all_spec->plaintext;
		}
		foreach ($spec_name_3 as $all_spec) {
			$data_spec3[] = $all_spec->plaintext;
		}
		foreach ($spec_name_4 as $all_spec) {
			$data_spec4[] = $all_spec->plaintext;
		}
		foreach ($spec_name_5 as $all_spec) {
			$data_spec5[] = $all_spec->plaintext;
		}

		while($index <= 9){
			$list1[]=$data1[$index];
			$list2[]=$data2[$index];
			$list3[]=$data3[$index];
			$list4[]=$data4[$index];

			$list_spec1[] = $data_spec1[$index];
			$list_spec2[] = $data_spec2[$index];
			$list_spec3[] = $data_spec3[$index];
			$list_spec4[] = $data_spec4[$index];
			$index = $index + 1;
		}
		while($index2 <= 1){
			$list5[]=$data5[$index2];
			$list_spec5[] = $data_spec5[$index2];
			$index2 = $index2 + 1;
		}
		$array1 = array_merge($list1,$list2, $list3, $list4, $list5);
		$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5);
		foreach ($array1 as $alldata) {
			echo($alldata);
			echo "<br/>";
		}
		echo(count($array1));
		echo "<hr>";

		foreach ($array2 as $alldata) {
			echo($alldata);
			echo "<br/>";
		}
		echo(count($array2));
		echo "<hr/>";

		$array1 = array_merge($list1,$list2, $list3, $list4, $list5);
		$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5);
		foreach ($array1 as $alldata) {
			$data = array('name' => $alldata);
		}
		foreach ($array2 as $alldata2) {
			$data = array('specialist' => $alldata2);
		}
    	

	?>
	</body>
</html>