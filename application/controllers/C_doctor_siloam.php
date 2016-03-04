<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


//session_start();
include('application/libraries/libs/simple_html_dom.php');
class C_doctor_siloam extends CI_Controller {
	
    public function index() {
    	$this->load->view('v_index');
    }

    public function siloam_jambi(){

    	$this->load->model('hospitalization_model');

		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";
		$url2 = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html2 = file_get_html($url2);
		$html = file_get_html($url);
		$doctor_name = $html->find('div[class="col-md-11"] a h3');
		$data1 = array();

		$this->db->select('*');
		$this->db->from('doctor_siloam_jambi');
		$this->db->where('no', count($doctor_name));
		$query = $this->db->get();

  		if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 } else {
		 		foreach ($doctor_name as $name_list) {
				$name_list = $name_list->plaintext;
				$data = array(
						'name' => $name_list,
						'hospital' => $html->find('li[class="row"] div h3', 0)->plaintext,
						'address' => $address = $html2->find('div[class="row"] div[class="col-md-8"]', 0)->plaintext
					);
			
			$this->db->insert('doctor_siloam_jambi', $data);			
			}

		 	echo "<script>alert('Database updated');</script>";
		}
		$data1 = $this->hospitalization_model->getdata_siloam_jambi();
		$this->load->view('v_doctor_siloam_jambi', array('list_data' => $data1));
    }

    public function siloam_cikarang(){
    	$this->load->model('hospitalization_model');

		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=17";
		$url2 = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html2 = file_get_html($url2);
		$html = file_get_html($url);
		$doctor_name = $html->find('div[class="col-md-11"] a h3');
		$data1 = array();

		$this->db->select('*');
		$this->db->from('doctor_siloam_cikarang');
		$this->db->where('no', count($doctor_name));
		$query = $this->db->get();

  		if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 } else {
		 		foreach ($doctor_name as $name_list) {
				$name_list = $name_list->plaintext;
				$data = array(
						'name' => $name_list,
						'hospital' => $html->find('li[class="row"] div h3', 0)->plaintext,
						'address' => $address = $html2->find('div[class="row"] div[class="col-md-8"]', 0)->plaintext
					);
			
			$this->db->insert('doctor_siloam_cikarang', $data);			
			}

		 	echo "<script>alert('Database updated');</script>";
		}
		$data1 = $this->hospitalization_model->getdata_siloam_cikarang();
		$this->load->view('v_doctor_siloam_cikarang', array('list_data' => $data1));
    }

    public function schedule_siloam_jambi(){
    	$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";
    	$url_2 = "http://www.siloamhospitals.com/doctors/find.html?hospital=17";
    	$html = file_get_html($url);
    	$html_2 = file_get_html($url_2);
    	$link = array(
    					'link_doctor' => $html->find('li[class="row"] div a'),
    					'link_doctor_2' => $html_2->find('li[class="row"] div a')
    				 );

    	$this->load->view('v_schedule_siloam_jambi', $link);
    }
    public function schedule_siloam_cikarang(){
    	$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";
    	$url_2 = "http://www.siloamhospitals.com/doctors/find.html?hospital=17";
    	$html = file_get_html($url);
    	$html_2 = file_get_html($url_2);
    	$link = array(
    					'link_doctor' => $html->find('li[class="row"] div a'),
    					'link_doctor_2' => $html_2->find('li[class="row"] div a')
    				 );

    	$this->load->view('v_schedule_siloam_cikarang', $link);
    }
}

?>