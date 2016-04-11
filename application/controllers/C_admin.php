<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


include('application/libraries/libs/simple_html_dom.php');


class C_admin extends CI_Controller {

    public function admin(){

    	$code = "opensesame";
    	$password = $this->input->post("inputcode");
        $data1 = $this->hospitalization_model->getdata_hospital();
        
    	if($code == $password){
    		$this->load->view('v_admin_list', array('list_hospital' => $data1));
    	}
    	else{
    		$this->load->view('v_about');
    	}
    }

    public function adminlist(){
        $data1 = $this->hospitalization_model->getdata_hospital();
        $this->load->view('v_admin_list', array('list_hospital' => $data1));
    }

    public function addadmin(){
        $this->load->view('v_admin');
    }

    public function delete($id){
        $this->load->model('hospitalization_model');
        $this->hospitalization_model->delete($id);

        $data1 = $this->hospitalization_model->getdata_hospital();
        $this->load->view('v_admin_list', array('list_hospital' => $data1));
        //redirect('c_admin/admin');
    }


    public function adminadd(){
        $this->load->model('hospitalization_model');
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('hospitalname', 'Hospital Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        //$this->form_validation->set_rules('website', 'Website', 'required');

    	$hospitalname = $this->input->post('hospitalname');
        $this->db->select('*');
        $this->db->from('hospital');
        $this->db->where('name', $hospitalname);
        $web_add = "http://www.";
        $web_input = $this->input->post('website');
        $web_site = $web_add . $web_input;

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            echo "<script>alert('Hospital Name already exist');</script>";
            $this->load->view('v_admin');
        } else {
            if ($this->form_validation->run() == FALSE) {
                 $this->load->view('v_admin');
            }
            else {
                $data = array(
                    'name' => $this->input->post('hospitalname'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'website' => $web_site
                );
                $this->db->insert('hospital', $data);
                $data1 = $this->hospitalization_model->getdata_hospital();
                $this->load->view('v_admin_list', array('list_hospital' => $data1));
            }
        }  
}
}