<?php
	if (!defined('BASEPATH'))
	    exit('No direct script access allowed');


	include('application/libraries/libs/simple_html_dom.php');
	class C_doctor_mitra extends CI_Controller {
		
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

			$data = array(
							'name_1' => $doc_name_1,
							'name_2' => $doc_name_2,
							'name_3' => $doc_name_3,
							'name_4' => $doc_name_4,
							'name_5' => $doc_name_5
						);
			$this->load->view('v_doctor_mitra_cikarang', $data);
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
			
			$data = array(
							'name_1' => $doc_name_1,
							'name_2' => $doc_name_2,
							'name_3' => $doc_name_3,
							'name_4' => $doc_name_4,
							'name_5' => $doc_name_5,
							'name_6' => $doc_name_6,
							'name_7' => $doc_name_7,
							'name_8' => $doc_name_8,
							'name_9' => $doc_name_9
						);

			$this->load->view('v_doctor_mitra_bekasi', $data);
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
			
			$data = array(
							'name_1' => $doc_name_1,
							'name_2' => $doc_name_2,
							'name_3' => $doc_name_3,
							'name_4' => $doc_name_4,
							'name_5' => $doc_name_5,
							'name_6' => $doc_name_6,
							'name_7' => $doc_name_7,
							'name_8' => $doc_name_8
						);
			$this->load->view('v_doctor_mitra_bekasi_timur', $data);
	    }
	}
?>