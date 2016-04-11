<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


include('application/libraries/libs/simple_html_dom.php');


class C_index extends CI_Controller {

    public function index() {
    	
        $this->load->view('v_home');
    }

    public function home(){
    	$this->load->view('v_home');
    }
    
    public function search_doctor(){
    	$hospital = $this->hospitalization_model->getdata_hospital();
    	
    	$data = array(
    					'data_hosp' => $hospital
    				);

    	$this->load->view('v_search', $data);
    }
    public function getHospital(){		
		$this->db->select('*');
		$this->db->from('hospital');
		//$this->db->where('no', count($doctor_name));
		$query = $this->db->get();

  		if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 } else {
				$data = array(
							array(
								'name' => 'Siloam Hospitals Jambi',
								'address' => 'Jl. Soekarno Hatta Paal Merah Jambi',
								'phone' => '(+62 741) 591 9000',
								'email' => 'siloamjambi.cs@siloamhospitals.com'
								),
							array(
								'name' => 'Siloam Hospitals Lippo Cikarang',
								'address' => 'Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550',
								'phone' => '(+62 21) 2963 6900',
								'email' => 'info.shlc@siloamhospitals.com'
								),
							array(
								'name' => 'RS Mitra Keluarga Cikarang',
								'address' => 'Jl. Industri Raya, Lemah abang, Cikarang',
								'phone' => '(+62-21) 89840500',
								'email' => 'cikarang@mitrakeluarga.com'
								),
							array(
								'name' => 'RS Mitra Keluarga Bekasi',
								'address' => 'Jl. Jenderal Ahmad Yani, Bekasi 17144',
								'phone' => '(+62-21) 8853333',
								'email' => 'bekasi@mitrakeluarga.com'
								),
							array(
								'name' => 'RS Mitra Keluarga Bekasi Timur',
								'address' => 'Jl. Pengasinan – Rawa Semut Margahayu, Bekasi Timur 17113',
								'phone' => '(+62-21) 89999222',
								'email' => 'bekasitimur@mitrakeluarga.com'
								),
							array(
								'name' => 'RS. Harapan Keluarga Jababeka',
								'address' => 'Jl. Kasuari Raya KAV. 1A & 1B Cikarang Baru – Bekasi 17550',
								'phone' => '021 8984 0745',
								'email' => 'marketingrshk@gmail.com'
								),
							array(
								'name' => 'Rs Hosana Medica Lippo Cikarang',
								'address' => 'Jl. Utama BIIE No. 01 Lippo Cikarang Cikarang Jawa Barat 17550',
								'phone' => '(021)897 24 72',
								'email' => 'lippocikarang@hosana-medica.com'
								),
							array(
								'name' => 'RS Hosana Medica Cikarang Baru',
								'address' => 'Jl Anggrek I B2/2 Rt.01 Rw.11 Cikarang Baru – Jababeka',
								'phone' => '(021)8983 1626',
								'email' => 'cikarangbaru@hosana-medica.com'
								),
							array(
								'name' => 'Rs Hosana Medica Bekasi',
								'address' => 'Jl. Pramuka No. 12 Rt.04 Rw.02 Kec. Rawa Lumbu Bekasi Jawa Barat',
								'phone' => '(021) 822 1573',
								'email' => 'bekasi@hosana-medica.com'
								),
							array(
								'name' => 'Rs Annisa',
								'address' => 'JL. Cikarang Baru No.31 Cikarang Utara Bekasi 17836, Jawa Barat',
								'phone' => '021 890 4165',
								'email' => 'info@rsannisa-cikarang.com'
								)
							);
			
				$this->db->insert_batch('hospital', $data);
			
				echo "<script>alert('Database updated');</script>";	
		}
	
		$data1 = $this->hospitalization_model->getdata_hospital();
		$this->load->view('v_page', array('list_hospital' => $data1));
    }

    public function search(){
    	$this->load->model('hospitalization_model');
    	$name = $this->input->post('search');
    	$search_hospital = $this->input->post('select_hospital');
    	$search_spec = $this->input->post('select_specialist');
    	$hospital = $this->hospitalization_model->getdata_hospital();
    	
    	if ($name == ""){
    		$result = "";
    	} else{
    		$result = $this->hospitalization_model->search_doctor($name);
    	}

    	$data = array(
    					'result' => $result,
    					'result1' => $this->hospitalization_model->search_dropdown($search_hospital),
    					'result2' => $this->hospitalization_model->search_dropdown_2($search_spec),
    					'data_hosp' => $hospital
    				);
    	
		$this->load->view('v_search', $data);
    }

    // public function search_drop(){
    // 	$this->load->model('hospitalization_model');
    // 	$search = $this->input->post('select_hospital');
    // 	$search_spec = $this->input->post('select_specialist');

    // 	$data = array(
    // 					'result1' => $this->hospitalization_model->search_dropdown($search),
    // 					'result2' => $this->hospitalization_model->search_dropdown_2($search_spec)
    // 		);

    // 	$this->load->view('v_search', $data);
    // }

    // public function search_specialist(){
    // 	$this->load->model('hospitalization_model');
    // 	$search_spec = $this->input->post('select_specialist');

    // 	$data = array(
    // 					'result2' => $this->hospitalization_model->search_dropdown_2($search_spec)
    // 		);
    // 	$this->load->view('v_search', $data);
    // }

    public function about(){
    	$this->load->view('v_about');
    }
}

?>