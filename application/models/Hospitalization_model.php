<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hospitalization_model extends CI_Model {

    public function getdata_hospital(){
        $query = $this->db->query('SELECT * FROM hospital');
        return $query->result_array();
    }
    public function gethospital_detail($name){
        $query = $this->db->select('*')->where('name', $name)->get('hospital');
        return $query->result_array();
    } 
    public function gethospital_id($name){
        $query = $this->db->select('*')->where('name', $name)->get('hospital');
        $return = $query->row();
        return $return->no;
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
        $query = $this->db->query('SELECT * FROM doctor_mitra_cikarang INNER JOIN hospital ON hospital.no = doctor_mitra_cikarang.hospital_id');
        return $query->result_array();

    }
    public function getdata_mitra_bekasi(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_bekasi INNER JOIN hospital ON hospital.no = doctor_mitra_bekasi.hospital_id');
        return $query->result_array();

    }
    public function getdata_mitra_bekasi_timur(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_bekasi_timur INNER JOIN hospital ON hospital.no = doctor_mitra_bekasi_timur.hospital_id');
        return $query->result_array();
    }

    public function getdata_mitra_kelapagading(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_kelapagading INNER JOIN hospital ON hospital.no = doctor_mitra_kelapagading.hospital_id');
        return $query->result_array();

    }
    
    public function getdata_mitra_depok(){
        $query = $this->db->query('SELECT * FROM doctor_mitra_depok INNER JOIN hospital ON hospital.no = doctor_mitra_depok.hospital_id');
        return $query->result_array();

    }
   
    public function delete($id){
        $this->db->where(['no' => $id]);
        $result = $this->db->delete('hospital');
        return $result;
    }

    public function search_doctor($name){
        // $this->db->like('name', $name);
        // $query = $this->db->get('doctor_siloam_jambi');
        $output = "";

        $query1 = $this->db->select('*')->like('doctor_name', $name)->join('hospital', 'hospital.no = doctor_mitra_cikarang.hospital_id', 'INNER')->get('doctor_mitra_cikarang');
        $query2 = $this->db->select('*')->like('doctor_name', $name)->join('hospital', 'hospital.no = doctor_mitra_bekasi.hospital_id', 'INNER')->get('doctor_mitra_bekasi');
        $query3 = $this->db->select('*')->like('doctor_name', $name)->join('hospital', 'hospital.no = doctor_mitra_bekasi_timur.hospital_id', 'INNER')->get('doctor_mitra_bekasi_timur');
        $query4 = $this->db->select('*')->like('doctor_name', $name)->join('hospital', 'hospital.no = doctor_mitra_depok.hospital_id', 'INNER')->get('doctor_mitra_depok');
        $query5 = $this->db->select('*')->like('doctor_name', $name)->join('hospital', 'hospital.no = doctor_mitra_kelapagading.hospital_id', 'INNER')->get('doctor_mitra_kelapagading');

        if ($name == ""){
            $output .= "Empty field-box!";
        }
        else{
        if ($query1->num_rows() == 0 && $query2->num_rows() == 0 && $query3->num_rows() == 0 && $query4->num_rows() == 0 && $query5->num_rows() == 0) {
            $output .= 'There was no search result!';
        } else {
            foreach ($query1->result() as $data) {
                $output .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
                }
            foreach ($query2->result() as $data) {
                 $output .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
                }
            foreach ($query3->result() as $data) {
                 $output .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
                }
            foreach ($query4->result() as $data) {
                 $output .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
                }
            foreach ($query5->result() as $data) {
                 $output .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
                }
            
            }   
        }
        return $output;
    }

    public function search_dropdown($id){
        $output2 = "";
        // $this->db->select('*');
        // $this->db->from('hospital'); 
        // $this->db->join('doctor_mitra_cikarang', 'doctor_mitra_cikarang.hospital_id = hospital.no', 'INNER');
        // $this->db->join('doctor_mitra_bekasi', 'doctor_mitra_bekasi.hospital_id = hospital.no', 'INNER');
        // $this->db->join('doctor_mitra_bekasi_timur', 'doctor_mitra_bekasi_timur.hospital_id = hospital.no', 'INNER');
        // $this->db->join('doctor_mitra_depok', 'doctor_mitra_depok.hospital_id = hospital.no', 'INNER');
        // $this->db->join('doctor_mitra_kelapagading', 'doctor_mitra_kelapagading.hospital_id = hospital.no', 'INNER');
        // $this->db->where('no', $id);

        $query1 = $this->db->select('*')->where('no', $id)->join('doctor_mitra_cikarang', 'doctor_mitra_cikarang.hospital_id = hospital.no', 'INNER')->get('hospital');
        $select_opt = "<select name='select_specialist' id='select_specialist' onchange='this.form.submit()'><option>--Specialist--</option>";
        $close_select= "</select>";
        
        foreach ($query1->result() as $data) {
            $output2 .= '<option value="'.$data->specialist.'">'. $data->specialist."</option>";
            }
        return $select_opt . $output2 . $close_select;
    }

    public function search_dropdown_2($spec){
        $output2 = "";
        $query1 = $this->db->select('*')->where('specialist', $spec)->join('hospital', 'hospital.no = doctor_mitra_cikarang.hospital_id', 'INNER')->get('doctor_mitra_cikarang');

        foreach ($query1->result() as $data) {
                $output2 .= '<tr> <td>' .$data->doctor_id.'</td> <td>' .$data->doctor_name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->name.'</td> <td>'.$data->day.'</td><td>'.$data->shift_1.'</td><td>'.$data->shift_2.'</td></tr>';
            }
        return $output2;

    }

    public function test(){
        $query = $this->db->query('SELECT * FROM test');
        return $query->result_array();

    }
}

?>