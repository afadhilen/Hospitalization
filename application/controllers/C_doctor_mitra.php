<?php
	if (!defined('BASEPATH'))
	    exit('No direct script access allowed');


	include('application/libraries/libs/simple_html_dom.php');
	class C_doctor_mitra extends CI_Controller {
		
	    public function index() {
	    	$this->load->view('v_index');
	    }

	    public function mitra_cikarang_home(){
	    	$this->load->model('hospitalization_model');

	    	$name = 'RS Mitra Keluarga Cikarang';
			$data = $this->hospitalization_model->gethospital_detail($name);
	    	$this->load->view('v_doctor_mitra_cikarang_home', array('list_data' => $data));
	    }

	    public function mitra_bekasi_home(){
	    	$this->load->model('hospitalization_model');

	    	$name = 'RS Mitra Keluarga Bekasi';
			$data = $this->hospitalization_model->gethospital_detail($name);
	    	$this->load->view('v_doctor_mitra_bekasi_home', array('list_data' => $data));
	    }

	    public function mitra_bekasi_timur_home(){
	    	$this->load->model('hospitalization_model');

	    	$name = 'RS Mitra Keluarga Bekasi Timur';
			$data = $this->hospitalization_model->gethospital_detail($name);
	    	$this->load->view('v_doctor_mitra_bekasi_timur_home', array('list_data' => $data));
	    }
	    
	    public function mitra_kelapagading_home(){
	    	$this->load->model('hospitalization_model');

	    	$name = 'RS Mitra Keluarga Kelapa Gading';
			$data = $this->hospitalization_model->gethospital_detail($name);
	    	$this->load->view('v_doctor_mitra_kelapagading_home', array('list_data' => $data));
	    }
	    
	    public function mitra_depok_home(){
	    	$this->load->model('hospitalization_model');

	    	$name = 'RS Mitra Keluarga Depok';
			$data = $this->hospitalization_model->gethospital_detail($name);
	    	$this->load->view('v_doctor_mitra_depok_home', array('list_data' => $data));
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
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];

				$list_spec1[] = $data_spec1[$index];
				$list_spec2[] = $data_spec2[$index];
				$list_spec3[] = $data_spec3[$index];
				$list_spec4[] = $data_spec4[$index];

				$list_sch1[]=$shift_1[$index];
				$list_sch2[]=$shift_2[$index];
				$list_sch3[]=$shift_3[$index];
				$list_sch4[]=$shift_4[$index];
				$list_sch5[]=$shift_5[$index];
				$list_sch6[]=$shift_6[$index];
				$list_sch7[]=$shift_7[$index];
				$list_sch8[]=$shift_8[$index];
				$index = $index + 1;
			}
			while($index2 <= 1){
				$list5[]=$data5[$index2];
				$list_spec5[] = $data_spec5[$index2];
				$list_sch9[]=$shift_9[$index2];
				$list_sch10[]=$shift_10[$index2];
				$index2 = $index2 + 1;
			}
			$array1 = array_merge($list1,$list2, $list3, $list4, $list5);
			$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5);
			$array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9);
			$array4 = array_merge($list_sch2,$list_sch4, $list_sch6, $list_sch8, $list_sch10);

			$this->db->select('*');
			$this->db->from('doctor_mitra_cikarang');
			$this->db->where('doctor_id', count($array1));
			$query = $this->db->get();

			$name = 'RS Mitra Keluarga Cikarang';
			$hospital_id = $this->hospitalization_model->gethospital_id($name);
			
			if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 	}else {
		 		for($i = 0; $i < count($array1); $i++){
		 			$data = array(
		 						'doctor_name' => $array1[$i],
		 						'specialist' => $array2[$i],
		 						'hospital_id'=> $hospital_id,
		 						'day' => $days,
		 						'shift_1' => $array3[$i],
		 						'shift_2' => $array4[$i]
		 					);
		 			$this->db->insert('doctor_mitra_cikarang', $data);
		 		}
		 		echo "<script>alert('Database updated');</script>";		
		 	}
		 	$data = $this->hospitalization_model->getdata_mitra_cikarang();
			$this->load->view('v_doctor_mitra_cikarang', array('list_data' => $data));
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
			
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			
			$spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			
			$sch_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');

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
			foreach ($doc_name_9 as $table_list) {
				$data9[] = $table_list->plaintext;
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
			foreach ($spec_name_6 as $all_spec) {
				$data_spec6[] = $all_spec->plaintext;
			}
			foreach ($spec_name_7 as $all_spec) {
				$data_spec7[] = $all_spec->plaintext;
			}
			foreach ($spec_name_8 as $all_spec) {
				$data_spec8[] = $all_spec->plaintext;
			}
			foreach ($spec_name_9 as $all_spec) {
				$data_spec9[] = $all_spec->plaintext;
			}

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

			}	foreach ($sch_name_6 as $schedule_1) {
	   			$schedule_1 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter1);
	   			$schedule_2 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter6);
	   			$shift_11[] = $schedule_1;
	   			$shift_12[] = $schedule_2;
	   			$counter6 = $counter6 + 1;
			}
			foreach ($sch_name_7 as $schedule_1) {
	   			$schedule_1 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter2);
	   			$schedule_2 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter7);
	   			$shift_13[] = $schedule_1;
	   			$shift_14[] = $schedule_2;
	   			$counter7 = $counter7 + 1;
			}
			foreach ($sch_name_8 as $schedule_1) {
	   			$schedule_1 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter3);
	   			$schedule_2 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter8);
	   			$shift_15[] = $schedule_1;
	   			$shift_16[] = $schedule_2;
	   			$counter8 = $counter8 + 1;
			}
			foreach ($sch_name_9 as $schedule_1) {
	   			$schedule_1 = $html_9->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter4);
	   			$schedule_2 = $html_9->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter9);
	   			$shift_17[] = $schedule_1;
	   			$shift_18[] = $schedule_2;
	   			$counter9 = $counter9 + 1;
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

				$list_spec1[] = $data_spec1[$index];
				$list_spec2[] = $data_spec2[$index];
				$list_spec3[] = $data_spec3[$index];
				$list_spec4[] = $data_spec4[$index];
				$list_spec5[] = $data_spec5[$index];
				$list_spec6[] = $data_spec6[$index];
				$list_spec7[] = $data_spec7[$index];
				$list_spec8[] = $data_spec8[$index];

				$list_sch1[]=$shift_1[$index];
				$list_sch2[]=$shift_2[$index];
				$list_sch3[]=$shift_3[$index];
				$list_sch4[]=$shift_4[$index];
				$list_sch5[]=$shift_5[$index];
				$list_sch6[]=$shift_6[$index];
				$list_sch7[]=$shift_7[$index];
				$list_sch8[]=$shift_8[$index];
				$list_sch9[]=$shift_9[$index];
				$list_sch10[]=$shift_10[$index];
				$list_sch11[]=$shift_11[$index];
				$list_sch12[]=$shift_12[$index];
				$list_sch13[]=$shift_13[$index];
				$list_sch14[]=$shift_14[$index];
				$list_sch15[]=$shift_15[$index];
				$list_sch16[]=$shift_16[$index];
				
				$index = $index + 1;
			}
			while($index2 <= 3){
				$list9[]=$data9[$index2];
				$list_spec9[] = $data_spec9[$index2];
				$list_sch17[]=$shift_17[$index2];
				$list_sch18[]=$shift_18[$index2];
				$index2 = $index2 + 1;
			}
			$array1 = array_merge($list1,$list2, $list3, $list4, $list5, $list6, $list7, $list8, $list9);
			$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5, $list_spec6, $list_spec7, $list_spec8, $list_spec9);
			$array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9, $list_sch11, $list_sch13, $list_sch15, $list_sch17);
			$array4 = array_merge($list_sch2,$list_sch4, $list_sch6, $list_sch8, $list_sch10, $list_sch12, $list_sch14, $list_sch16, $list_sch18);

			$this->db->select('*');
			$this->db->from('doctor_mitra_bekasi');
			$this->db->where('doctor_id', count($array1));
			$query = $this->db->get();

			$name = 'RS Mitra Keluarga Bekasi';
			$hospital_id = $this->hospitalization_model->gethospital_id($name);

			if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 	}else {
		 		for($i = 0; $i < count($array1); $i++){
		 			$data = array(
		 						'doctor_name' => $array1[$i],
		 						'specialist' => $array2[$i],
		 						'hospital_id'=> $hospital_id,
		 						'day' => $days,
		 						'shift_1' => $array3[$i],
		 						'shift_2' => $array4[$i]
		 					);
		 			$this->db->insert('doctor_mitra_bekasi', $data);
		 		}
		 		echo "<script>alert('Database updated');</script>";		
		 	}
		 	$data = $this->hospitalization_model->getdata_mitra_bekasi();
			$this->load->view('v_doctor_mitra_bekasi', array('list_data' => $data));
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
			foreach ($spec_name_6 as $all_spec) {
				$data_spec6[] = $all_spec->plaintext;
			}
			foreach ($spec_name_7 as $all_spec) {
				$data_spec7[] = $all_spec->plaintext;
			}
			foreach ($spec_name_8 as $all_spec) {
				$data_spec8[] = $all_spec->plaintext;
			}

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

			}	foreach ($sch_name_6 as $schedule_1) {
	   			$schedule_1 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter1);
	   			$schedule_2 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter6);
	   			$shift_11[] = $schedule_1;
	   			$shift_12[] = $schedule_2;
	   			$counter6 = $counter6 + 1;
			}
			foreach ($sch_name_7 as $schedule_1) {
	   			$schedule_1 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter2);
	   			$schedule_2 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter7);
	   			$shift_13[] = $schedule_1;
	   			$shift_14[] = $schedule_2;
	   			$counter7 = $counter7 + 1;
			}
			foreach ($sch_name_8 as $schedule_1) {
	   			$schedule_1 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter3);
	   			$schedule_2 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter8);
	   			$shift_15[] = $schedule_1;
	   			$shift_16[] = $schedule_2;
	   			$counter8 = $counter8 + 1;
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

				$list_spec1[] = $data_spec1[$index];
				$list_spec2[] = $data_spec2[$index];
				$list_spec3[] = $data_spec3[$index];
				$list_spec4[] = $data_spec4[$index];
				$list_spec5[] = $data_spec5[$index];
				$list_spec6[] = $data_spec6[$index];
				$list_spec7[] = $data_spec7[$index];
				$list_spec8[] = $data_spec8[$index];

				$list_sch1[]=$shift_1[$index];
				$list_sch2[]=$shift_2[$index];
				$list_sch3[]=$shift_3[$index];
				$list_sch4[]=$shift_4[$index];
				$list_sch5[]=$shift_5[$index];
				$list_sch6[]=$shift_6[$index];
				$list_sch7[]=$shift_7[$index];
				$list_sch8[]=$shift_8[$index];
				$list_sch9[]=$shift_9[$index];
				$list_sch10[]=$shift_10[$index];
				$list_sch11[]=$shift_11[$index];
				$list_sch12[]=$shift_12[$index];
				$list_sch13[]=$shift_13[$index];
				$list_sch14[]=$shift_14[$index];
				$list_sch15[]=$shift_15[$index];
				$list_sch16[]=$shift_16[$index];
				$index = $index + 1;
			}
		
			$array1 = array_merge($list1,$list2, $list3, $list4, $list5, $list6, $list7, $list8);
			$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5, $list_spec6, $list_spec7, $list_spec8);
			$array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9, $list_sch11, $list_sch13, $list_sch15);
			$array4 = array_merge($list_sch2,$list_sch4, $list_sch6, $list_sch8, $list_sch10, $list_sch12, $list_sch14, $list_sch16);

			$this->db->select('*');
			$this->db->from('doctor_mitra_bekasi_timur');
			$this->db->where('doctor_id', count($array1));
			$query = $this->db->get();

			$name = 'RS Mitra Keluarga Bekasi Timur';
			$hospital_id = $this->hospitalization_model->gethospital_id($name);


			if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 	}else {
		 		for($i = 0; $i < count($array1); $i++){
		 			$data = array(
		 						'doctor_name' => $array1[$i],
		 						'specialist' => $array2[$i],
		 						'hospital_id'=> $hospital_id,
		 						'day' => $days,
		 						'shift_1' => $array3[$i],
		 						'shift_2' => $array4[$i]
		 						
		 					);
		 			$this->db->insert('doctor_mitra_bekasi_timur', $data);
		 		}
		 		echo "<script>alert('Database updated');</script>";
		 		$data = $this->hospitalization_model->getdata_mitra_bekasi_timur();
				$this->load->view('v_doctor_mitra_bekasi_timur', array('list_data' => $data));		
		 	}
	    }

	    public function mitra_kelapagading(){
	    	$this->load->model('hospitalization_model');

			$url_1 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=1";
			$url_2 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=2";
			$url_3 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=3";
			$url_4 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=4";
			$url_5 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=5";
			$url_6 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=6";
			$url_7 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=7";
			$url_8 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=8";
			$url_9 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=9";
			$url_10 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=10";
			$url_11 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=11";
			$url_12 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=12";
			$url_13 = "http://mitrakeluarga.com/kelapagading/jadwal-dokter/?wpv_view_count=6175&wpv_paged=13";

			$html_1 = file_get_html($url_1);
			$html_2 = file_get_html($url_2);
			$html_3 = file_get_html($url_3);
			$html_4 = file_get_html($url_4);
			$html_5 = file_get_html($url_5);
			$html_6 = file_get_html($url_6);
			$html_7 = file_get_html($url_7);
			$html_8 = file_get_html($url_8);
			$html_9 = file_get_html($url_9);
			$html_10 = file_get_html($url_10);
			$html_11 = file_get_html($url_11);
			$html_12 = file_get_html($url_12);
			$html_13 = file_get_html($url_13);
			
			$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_10 = $html_10->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_11 = $html_11->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_12 = $html_12->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			$doc_name_13 = $html_13->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
			
			$spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_10 = $html_10->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_11 = $html_11->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_12 = $html_12->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			$spec_name_13 = $html_13->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
			
			$sch_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_6 = $html_6->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_7 = $html_7->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_8 = $html_8->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_9 = $html_9->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_10 = $html_10->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_11 = $html_11->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_12 = $html_12->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');
			$sch_name_13 = $html_13->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr table');

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
			foreach ($doc_name_9 as $table_list) {
				$data9[] = $table_list->plaintext;
			}
			foreach ($doc_name_10 as $table_list) {
				$data10[] = $table_list->plaintext;
			}
			foreach ($doc_name_11 as $table_list) {
				$data11[] = $table_list->plaintext;
			}
			foreach ($doc_name_12 as $table_list) {
				$data12[] = $table_list->plaintext;
			}
			foreach ($doc_name_13 as $table_list) {
				$data13[] = $table_list->plaintext;
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
			foreach ($spec_name_6 as $all_spec) {
				$data_spec6[] = $all_spec->plaintext;
			}
			foreach ($spec_name_7 as $all_spec) {
				$data_spec7[] = $all_spec->plaintext;
			}
			foreach ($spec_name_8 as $all_spec) {
				$data_spec8[] = $all_spec->plaintext;
			}
			foreach ($spec_name_9 as $all_spec) {
				$data_spec9[] = $all_spec->plaintext;
			}
			foreach ($spec_name_10 as $all_spec) {
				$data_spec10[] = $all_spec->plaintext;
			}
			foreach ($spec_name_11 as $all_spec) {
				$data_spec11[] = $all_spec->plaintext;
			}
			foreach ($spec_name_12 as $all_spec) {
				$data_spec12[] = $all_spec->plaintext;
			}
			foreach ($spec_name_13 as $all_spec) {
				$data_spec13[] = $all_spec->plaintext;
			}

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

			}	foreach ($sch_name_6 as $schedule_1) {
	   			$schedule_1 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter6);
	   			$schedule_2 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter6);
	   			$shift_11[] = $schedule_1;
	   			$shift_12[] = $schedule_2;
	   			$counter6 = $counter6 + 1;
			}
			foreach ($sch_name_7 as $schedule_1) {
	   			$schedule_1 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter7);
	   			$schedule_2 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter7);
	   			$shift_13[] = $schedule_1;
	   			$shift_14[] = $schedule_2;
	   			$counter7 = $counter7 + 1;
			}
			foreach ($sch_name_8 as $schedule_1) {
	   			$schedule_1 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter8);
	   			$schedule_2 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter8);
	   			$shift_15[] = $schedule_1;
	   			$shift_16[] = $schedule_2;
	   			$counter8 = $counter8 + 1;
			}
			foreach ($sch_name_9 as $schedule_1) {
	   			$schedule_1 = $html_9->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter9);
	   			$schedule_2 = $html_9->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter9);
	   			$shift_17[] = $schedule_1;
	   			$shift_18[] = $schedule_2;
	   			$counter9 = $counter9 + 1;
	   			
			}
			foreach ($sch_name_10 as $schedule_1) {
	   			$schedule_1 = $html_10->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter10);
	   			$schedule_2 = $html_10->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter10);
	   			$shift_19[] = $schedule_1;
	   			$shift_20[] = $schedule_2;
	   			$counter10 = $counter10 + 1;
			}
			foreach ($sch_name_11 as $schedule_1) {
	   			$schedule_1 = $html_11->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter11);
	   			$schedule_2 = $html_11->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter11);
	   			$shift_21[] = $schedule_1;
	   			$shift_22[] = $schedule_2;
	   			$counter11 = $counter11 + 1;
			}
			foreach ($sch_name_12 as $schedule_1) {
	   			$schedule_1 = $html_12->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter12);
	   			$schedule_2 = $html_12->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter12);
	   			$shift_23[] = $schedule_1;
	   			$shift_24[] = $schedule_2;
	   			$counter12 = $counter12 + 1;
			}
			foreach ($sch_name_13 as $schedule_1) {
	   			$schedule_1 = $html_13->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter13);
	   			$schedule_2 = $html_13->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter13);
	   			$shift_25[] = $schedule_1;
	   			$shift_26[] = $schedule_2;
	   			$counter13 = $counter13 + 1;
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
				$list9[]=$data9[$index];
				$list10[]=$data10[$index];
				$list11[]=$data11[$index];
				$list12[]=$data12[$index];

				$list_spec1[] = $data_spec1[$index];
				$list_spec2[] = $data_spec2[$index];
				$list_spec3[] = $data_spec3[$index];
				$list_spec4[] = $data_spec4[$index];
				$list_spec5[] = $data_spec5[$index];
				$list_spec6[] = $data_spec6[$index];
				$list_spec7[] = $data_spec7[$index];
				$list_spec8[] = $data_spec8[$index];
				$list_spec9[] = $data_spec9[$index];
				$list_spec10[] = $data_spec10[$index];
				$list_spec11[] = $data_spec11[$index];
				$list_spec12[] = $data_spec12[$index];

				$list_sch1[]=$shift_1[$index];
				$list_sch2[]=$shift_2[$index];
				$list_sch3[]=$shift_3[$index];
				$list_sch4[]=$shift_4[$index];
				$list_sch5[]=$shift_5[$index];
				$list_sch6[]=$shift_6[$index];
				$list_sch7[]=$shift_7[$index];
				$list_sch8[]=$shift_8[$index];
				$list_sch9[]=$shift_9[$index];
				$list_sch10[]=$shift_10[$index];
				$list_sch11[]=$shift_11[$index];
				$list_sch12[]=$shift_12[$index];
				$list_sch13[]=$shift_13[$index];
				$list_sch14[]=$shift_14[$index];
				$list_sch15[]=$shift_15[$index];
				$list_sch16[]=$shift_16[$index];
				$list_sch17[]=$shift_17[$index];
				$list_sch18[]=$shift_18[$index];
				$list_sch19[]=$shift_19[$index];
				$list_sch20[]=$shift_20[$index];
				$list_sch21[]=$shift_21[$index];
				$list_sch22[]=$shift_22[$index];
				$list_sch23[]=$shift_23[$index];
				$list_sch24[]=$shift_24[$index];
				
				$index = $index + 1;
			}

			while($index2 <= 7){
				$list13[]=$data13[$index2];
				$list_spec13[] = $data_spec13[$index2];
				$list_sch25[]=$shift_25[$index2];
				$list_sch26[]=$shift_26[$index2];
				$index2 = $index2 + 1;
			}

			$array1 = array_merge($list1,$list2, $list3, $list4, $list5, $list6, $list7, $list8, $list9, $list10, $list11, $list12, $list13);
			$array2 = array_merge($list_spec1, $list_spec2, $list_spec3, $list_spec4, $list_spec5, $list_spec6, $list_spec7, $list_spec8, $list_spec9, $list_spec10, $list_spec11, $list_spec12, $list_spec13);
			$array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9, $list_sch11, $list_sch13, $list_sch15, $list_sch17, $list_sch19, $list_sch21, $list_sch23, $list_sch25);
			$array4 = array_merge($list_sch2, $list_sch4, $list_sch6, $list_sch8, $list_sch10, $list_sch12, $list_sch14, $list_sch16, $list_sch18, $list_sch20, $list_sch22, $list_sch24, $list_sch26);

	   		$this->db->select('*');
			$this->db->from('doctor_mitra_kelapagading');
			$this->db->where('doctor_id', count($array1));
			$query = $this->db->get();

			$name = 'RS Mitra Keluarga Kelapa Gading';
			$hospital_id = $this->hospitalization_model->gethospital_id($name);


			if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 	}else {
		 		for($i = 0; $i < count($array1); $i++){
		 			$data = array(
		 						'doctor_name' => $array1[$i],
		 						'specialist' => $array2[$i],
		 						'hospital_id'=> $hospital_id,
		 						'day' => $days,
		 						'shift_1' => $array3[$i],
		 						'shift_2' => $array4[$i]
		 						
		 					);
		 			$this->db->insert('doctor_mitra_kelapagading', $data);
		 		}
		 		echo "<script>alert('Database updated');</script>";
		 			
		 	}
		 	$data = $this->hospitalization_model->getdata_mitra_kelapagading();
			$this->load->view('v_doctor_mitra_kelapagading', array('list_data' => $data));	
		 }

	public function mitra_depok(){
		$this->load->model('hospitalization_model');

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
			foreach ($spec_name_6 as $all_spec) {
				$data_spec6[] = $all_spec->plaintext;
			}
			foreach ($spec_name_7 as $all_spec) {
				$data_spec7[] = $all_spec->plaintext;
			}
			foreach ($spec_name_8 as $all_spec) {
				$data_spec8[] = $all_spec->plaintext;
			}

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

			}	foreach ($sch_name_6 as $schedule_1) {
	   			$schedule_1 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter6);
	   			$schedule_2 = $html_6->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter6);
	   			$shift_11[] = $schedule_1;
	   			$shift_12[] = $schedule_2;
	   			$counter6 = $counter6 + 1;
			}
			foreach ($sch_name_7 as $schedule_1) {
	   			$schedule_1 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter7);
	   			$schedule_2 = $html_7->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter7);
	   			$shift_13[] = $schedule_1;
	   			$shift_14[] = $schedule_2;
	   			$counter7 = $counter7 + 1;
			}
			foreach ($sch_name_8 as $schedule_1) {
	   			$schedule_1 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px"]', $counter8);
	   			$schedule_2 = $html_8->find('td ul[style="list-style-type:none;padding-left:10px;padding-right:10px;border-right: 1px solid gray"]', $counter8);
	   			$shift_15[] = $schedule_1;
	   			$shift_16[] = $schedule_2;
	   			$counter8 = $counter8 + 1;
			}

			while($index <= 9){
				$list1[]=$data1[$index];
				$list2[]=$data2[$index];
				$list3[]=$data3[$index];
				$list4[]=$data4[$index];
				$list5[]=$data5[$index];
				$list6[]=$data6[$index];
				$list7[]=$data7[$index];
				
				$list_spec1[] = $data_spec1[$index];
				$list_spec2[] = $data_spec2[$index];
				$list_spec3[] = $data_spec3[$index];
				$list_spec4[] = $data_spec4[$index];
				$list_spec5[] = $data_spec5[$index];
				$list_spec6[] = $data_spec6[$index];
				$list_spec7[] = $data_spec7[$index];
				

				$list_sch1[]=$shift_1[$index];
				$list_sch2[]=$shift_2[$index];
				$list_sch3[]=$shift_3[$index];
				$list_sch4[]=$shift_4[$index];
				$list_sch5[]=$shift_5[$index];
				$list_sch6[]=$shift_6[$index];
				$list_sch7[]=$shift_7[$index];
				$list_sch8[]=$shift_8[$index];
				$list_sch9[]=$shift_9[$index];
				$list_sch10[]=$shift_10[$index];
				$list_sch11[]=$shift_11[$index];
				$list_sch12[]=$shift_12[$index];
				$list_sch13[]=$shift_13[$index];
				$list_sch14[]=$shift_14[$index];
				
				$index = $index + 1;
			}
			while($index2 <= 6){
				$list8[]=$data8[$index2];
				$list_spec8[] = $data_spec8[$index2];
				$list_sch15[]=$shift_15[$index2];
				$list_sch16[]=$shift_16[$index2];
				$index2 = $index2 + 1;
			}
		
			$array1 = array_merge($list1,$list2, $list3, $list4, $list5, $list6, $list7, $list8);
			$array2 = array_merge($list_spec1,$list_spec2, $list_spec3, $list_spec4, $list_spec5, $list_spec6, $list_spec7, $list_spec8);
			$array3 = array_merge($list_sch1, $list_sch3, $list_sch5, $list_sch7, $list_sch9, $list_sch11, $list_sch13, $list_sch15);
			$array4 = array_merge($list_sch2,$list_sch4, $list_sch6, $list_sch8, $list_sch10, $list_sch12, $list_sch14, $list_sch16);

			$this->db->select('*');
			$this->db->from('doctor_mitra_depok');
			$this->db->where('doctor_id', count($array1));
			$query = $this->db->get();

			$name = 'RS Mitra Keluarga Depok';
			$hospital_id = $this->hospitalization_model->gethospital_id($name);

			if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 	}else {
		 		for($i = 0; $i < count($array1); $i++){
		 			$data = array(
		 						'doctor_name' => $array1[$i],
		 						'specialist' => $array2[$i],
		 						'hospital_id'=> $hospital_id,
		 						'day' => $days,
		 						'shift_1' => $array3[$i],
		 						'shift_2' => $array4[$i]
		 					);
		 			$this->db->insert('doctor_mitra_depok', $data);
		 		}
		 		echo "<script>alert('Database updated');</script>";
		 	}
		 	$data = $this->hospitalization_model->getdata_mitra_depok();
			$this->load->view('v_doctor_mitra_depok', array('list_data' => $data));		
		 }
	}
?>