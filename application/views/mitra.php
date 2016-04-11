<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
	<?php
		include('application/libraries/libs/simple_html_dom.php');
		
			$url_1 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=1";
			$url_2 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=2";
			$url_3 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=3";
			$url_4 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=4";
			$url_5 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=5";
			$url_6 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=6";
			$url_7 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=7";
			$url_8 = "http://mitrakeluarga.com/depok/jadwal-dokter/?wpv_view_count=6173&wpv_paged=8";

			$html_1 = file_get_html($url_1);
			$html_2 = file_get_html($url_2);
			$html_3 = file_get_html($url_3);
			$html_4 = file_get_html($url_4);
			$html_5 = file_get_html($url_5);
			$html_6 = file_get_html($url_6);
			$html_7 = file_get_html($url_7);
			$html_8 = file_get_html($url_8);
			
			
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			
			$spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			
			
			$sch_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			

			$day = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$counter = 0;
			foreach ($day as $days) {
				$days = $html_1->find('td ul[style="list-style-type:none;padding-left:10px;border-left: 1px solid gray"]', $counter);
			}

			$index = 0;
			$index2 = 0;
			$counter1 = 0;
			$counter2 = 0;
			$counter3 = 0;
			$counter4 = 0;
			$counter5 = 0;
			$counter6 = 0;
			$counter7 = 0;
			$counter8 = 0;
			$counter9 = 0;
			$counter10 = 0;
			$counter11 = 0;
			$counter12 = 0;
			$counter13 = 0;
			$data = array();

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
			foreach ($doc_name_6 as $table_list) {
				$data6[] = $table_list->plaintext;
			}
			foreach ($doc_name_7 as $table_list) {
				$data7[] = $table_list->plaintext;
			}
			foreach ($doc_name_8 as $table_list) {
				$data8[] = $table_list->plaintext;
			}

			while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];
				$list5[]=$data5[$index];
				$list6[]=$data6[$index];
				$list7[]=$data7[$index];
				

				$index = $index + 1;
			}

			while($index2 <= 6){
				$list8[]=$data8[$index2];
				
				$index2 = $index2 + 1;
			}

			$array1 = array_merge($list1,$list2, $list3, $list4, $list5, $list6, $list7, $list8);
			// $array2 = array_merge($list_spec1, $list_spec2, $list_spec3, $list_spec4, $list_spec5, $list_spec6, $list_spec7, $list_spec8, $list_spec9, $list_spec10, $list_spec11, $list_spec12, $list_spec13);
			// $array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9, $list_sch11, $list_sch13, $list_sch15, $list_sch17, $list_sch19, $list_sch21, $list_sch23, $list_sch25);
			// $array4 = array_merge($list_sch2, $list_sch4, $list_sch6, $list_sch8, $list_sch10, $list_sch12, $list_sch14, $list_sch16, $list_sch18, $list_sch20, $list_sch22, $list_sch24, $list_sch26);
		
		foreach ($array1 as $alldata) {
			echo($alldata);
			echo "<br/>";
		}
		echo(count($array1));
		echo "<hr>";

		// foreach ($array2 as $alldata) {
		// 	echo($alldata);
		// 	echo "<br/>";
		// }
		// echo(count($array2));
		// echo "<hr/>";
	?>
	</body>
</html>