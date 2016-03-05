<?php
	if (!defined('BASEPATH'))
	    exit('No direct script access allowed');


	include('application/libraries/libs/simple_html_dom.php');
	class C_doctor_mitra_schedule extends CI_Controller {
		
	    public function index() {
	    	$this->load->view('v_index');
	    }

	    public function mitra_cikarang(){
	    	$this->load->model('hospitalization_model');

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
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');

			$index = 0;
			$index2 = 0;
			$data = array();
			foreach ($doc_name_1 as $table_list) {
				$data1[] = $table_list;
			}
			foreach ($doc_name_2 as $table_list) {
				$data2[] = $table_list;
			}
			foreach ($doc_name_3 as $table_list) {
				$data3[] = $table_list;
			}
			foreach ($doc_name_4 as $table_list) {
				$data4[] = $table_list;
			}
			foreach ($doc_name_5 as $table_list) {
				$data5[] = $table_list;
			}
			while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];
				$index = $index + 1;
			}
			while($index2 <= 1){
				$list5[]=$data5[$index2];
				$index2 = $index2 + 1;
			}
			$array1 = array_merge($list1,$list2, $list3, $list4, $list5);
			$data = array(
							'name_1' => $list1,
							'name_2' => $list2,
							'name_3' => $list3,
							'name_4' => $list4,
							'name_5' => $list5,
						 );
			$this->load->view('v_doctor_mitra_cikarang_schedule', $data);
	    }

	    public function mitra_bekasi(){
	    	$this->load->model('hospitalization_model');

			$url_1 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=1";
			$url_2 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=2";
			$url_3 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=3";
			$url_4 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=4";
			$url_5 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=5";
			$url_6 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=6";
			$url_7 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=7";
			$url_8 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=8";
			$url_9 = "http://mitrakeluarga.com/bekasi/jadwal-dokter/?wpv_view_count=6173&wpv_paged=9";
			$html_1 = file_get_html($url_1);
			$html_2 = file_get_html($url_2);
			$html_3 = file_get_html($url_3);
			$html_4 = file_get_html($url_4);
			$html_5 = file_get_html($url_5);
			$html_6 = file_get_html($url_6);
			$html_7 = file_get_html($url_7);
			$html_8 = file_get_html($url_8);
			$html_9 = file_get_html($url_9);
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			
			$index = 0;
			$index2 = 0;
			$data = array();
			foreach ($doc_name_1 as $table_list) {
				$data1[] = $table_list;
			}
			foreach ($doc_name_2 as $table_list) {
				$data2[] = $table_list;
			}
			foreach ($doc_name_3 as $table_list) {
				$data3[] = $table_list;
			}
			foreach ($doc_name_4 as $table_list) {
				$data4[] = $table_list;
			}
			foreach ($doc_name_5 as $table_list) {
				$data5[] = $table_list;
			}
			foreach ($doc_name_6 as $table_list) {
				$data6[] = $table_list;
			}
			foreach ($doc_name_7 as $table_list) {
				$data7[] = $table_list;
			}
			foreach ($doc_name_8 as $table_list) {
				$data8[] = $table_list;
			}
			foreach ($doc_name_9 as $table_list) {
				$data9[] = $table_list;
			}

			while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];
				$list5[]=$data5[$index];
				$list6[]=$data6[$index];
				$list7[]=$data7[$index];
				$list8[]=$data8[$index];

				$index = $index + 1;
			}
			while($index2 <= 3){
				$list9[]=$data9[$index2];
				$index2 = $index2 + 1;
			}

			$data = array(
							'name_1' => $list1,
							'name_2' => $list2,
							'name_3' => $list3,
							'name_4' => $list4,
							'name_5' => $list5,
							'name_6' => $list6,
							'name_7' => $list7,
							'name_8' => $list8,
							'name_9' => $list9
						);

			$this->load->view('v_doctor_mitra_bekasi_schedule', $data);
	    }

	    public function mitra_bekasi_timur(){
	    	$this->load->model('hospitalization_model');

			$url_1 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=1";
			$url_2 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=2";
			$url_3 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=3";
			$url_4 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=4";
			$url_5 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=5";
			$url_6 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=6";
			$url_7 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=7";
			$url_8 = "http://mitrakeluarga.com/bekasitimur/jadwal-dokter/?wpv_view_count=6482&wpv_paged=8";
			$html_1 = file_get_html($url_1);
			$html_2 = file_get_html($url_2);
			$html_3 = file_get_html($url_3);
			$html_4 = file_get_html($url_4);
			$html_5 = file_get_html($url_5);
			$html_6 = file_get_html($url_6);
			$html_7 = file_get_html($url_7);
			$html_8 = file_get_html($url_8);
			
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			$doc_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			
			$index = 0;
			$index2 = 0;
			$data = array();
			foreach ($doc_name_1 as $table_list) {
				$data1[] = $table_list;
			}
			foreach ($doc_name_2 as $table_list) {
				$data2[] = $table_list;
			}
			foreach ($doc_name_3 as $table_list) {
				$data3[] = $table_list;
			}
			foreach ($doc_name_4 as $table_list) {
				$data4[] = $table_list;
			}
			foreach ($doc_name_5 as $table_list) {
				$data5[] = $table_list;
			}
			foreach ($doc_name_6 as $table_list) {
				$data6[] = $table_list;
			}
			foreach ($doc_name_7 as $table_list) {
				$data7[] = $table_list;
			}
			foreach ($doc_name_8 as $table_list) {
				$data8[] = $table_list;
			}

			while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];
				$list5[]=$data5[$index];
				$list6[]=$data6[$index];
				$list7[]=$data7[$index];
				$list8[]=$data8[$index];

				$index = $index + 1;
			}

			$data = array(
							'name_1' => $list1,
							'name_2' => $list2,
							'name_3' => $list3,
							'name_4' => $list4,
							'name_5' => $list5,
							'name_6' => $list6,
							'name_7' => $list7,
							'name_8' => $list8
						);
			$this->load->view('v_doctor_mitra_bekasi_timur_schedule', $data);
	    }
	}
?>