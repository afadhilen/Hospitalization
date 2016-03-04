<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hospitalization_model extends CI_Model {

    public function getdata_hospital(){
        $query = $this->db->query('SELECT * FROM hospital');
        return $query->result_array();
    }

    public function getdata_siloam_jambi() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_jambi');
    	return $query->result_array();
    }

    public function getdata_siloam_cikarang() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_cikarang');
    	return $query->result_array();
    }

    public function getdata_mitra_cikarang(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_cikarang');
        return $query->result_array();

    }
    public function getdata_mitra_bekasi(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_bekasi');
        return $query->result_array();

    }
    public function getdata_mitra_bekasi_timur(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_bekasi_timur');
        return $query->result_array();

    }

    public function search_doctor($name){
        // $this->db->like('name', $name);
        // $query = $this->db->get('doctor_siloam_jambi');
        $output = "";

        $query1 = $this->db->select('*')->like('name', $name)->get('doctor_siloam_jambi');
        $query2 = $this->db->select('*')->like('name', $name)->get('doctor_siloam_cikarang');

        if ($name == ""){
            $output .= "Empty field-box!";
        }
        else{
        if ($query1->num_rows() == 0 || $query2->num_rows() == 0 ) {
            $output .= 'There was no search result!';
        } else {
            foreach ($query1->result() as $data) {
                $output .= '<tr> <td>' .$data->no.'</td> <td>' .$data->name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->hospital.'</td></tr>';
                }
            foreach ($query2->result() as $data) {
                $output .= '<tr> <td>' .$data->no.'</td> <td>' .$data->name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->hospital.'</td></tr>';
                }
            
            }   
        }
        return $output;
    }
}

?>