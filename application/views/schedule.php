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
	
		$sch_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
		$sch_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
		$sch_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
		$sch_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
		$sch_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');

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
		$data = array();

		foreach ($sch_name_1 as $schedule_1) {
   			$schedule_1 = $html_1->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter1);
   			$schedule_2 = $html_1->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter1);
   			$shift_1[] = $schedule_1;
   			$shift_2[] = $schedule_2;
   			$counter1 = $counter1 + 1;
		}
		foreach ($sch_name_2 as $schedule_1) {
   			$schedule_1 = $html_2->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter2);
   			$schedule_2 = $html_2->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter2);
   			$shift_3[] = $schedule_1;
   			$shift_4[] = $schedule_2;
   			$counter2 = $counter2 + 1;
		}
		foreach ($sch_name_3 as $schedule_1) {
   			$schedule_1 = $html_3->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter3);
   			$schedule_2 = $html_3->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter3);
   			$shift_5[] = $schedule_1;
   			$shift_6[] = $schedule_2;
   			$counter3 = $counter3 + 1;
		}
		foreach ($sch_name_4 as $schedule_1) {
   			$schedule_1 = $html_4->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter4);
   			$schedule_2 = $html_4->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter4);
   			$shift_7[] = $schedule_1;
   			$shift_8[] = $schedule_2;
   			$counter4 = $counter4 + 1;
		}
		foreach ($sch_name_5 as $schedule_1) {
   			$schedule_1 = $html_5->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter5);
   			$schedule_2 = $html_5->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter5);
   			$shift_9[] = $schedule_1;
   			$shift_10[] = $schedule_2;
   			$counter5 = $counter5 + 1;
		}
		while($index <= 9){
				$list1[]=$shift_1[$index];
				$list2[]=$shift_2[$index];
				$list3[]=$shift_3[$index];
				$list4[]=$shift_4[$index];
				$list5[]=$shift_5[$index];
				$list6[]=$shift_6[$index];
				$list7[]=$shift_7[$index];
				$list8[]=$shift_8[$index];
				$index = $index + 1;
			}
		while($index2 <= 1){
				$list9[]=$shift_9[$index2];
				$list10[]=$shift_10[$index2];
				$index2 = $index2 + 1;
			}

		$array1 = array_merge($list1, $list3, $list5, $list7, $list9);
		$array2 = array_merge($list2,$list4, $list6, $list8, $list10);
		$array3 = array_merge($array1, $array2);

			$this->db->select('*');
			$this->db->from('test');
			$this->db->where('day_id', count($array1));
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				echo "<script>alert('Database up to date');</script>";
			} else {
					for($i = 0; $i < count($array1); $i++){
						$data = array(
							'day_name' => $days,
							'shift_1' => $array1[$i],
							'shift_2' => $array2[$i]
							);
						$this->db->insert('test', $data);
				}
			}
			$data = $this->hospitalization_model->test();
			$this->load->view('test', array('list_data' => $data));
	?>
	</body>
</html>