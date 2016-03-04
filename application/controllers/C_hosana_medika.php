<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


include('application/libraries/libs/simple_html_dom.php');
class C_hosana_medika extends CI_Controller {

    public function index() {
    	$url = "http://hosana-medica.com/jadwal-dokter/";
		$html = file_get_html($url);

		$all_data = $html->find('div[class="su-spoiler-content su-clearfix"] table');

		$data = array(
				'list' => $all_data
				);

        $this->load->view('v_hosana_medika', $data);
    }
}

?>