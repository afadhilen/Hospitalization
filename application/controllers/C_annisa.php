<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

include('application/libraries/libs/simple_html_dom.php');

class C_annisa extends CI_Controller {

    public function index() {
    	$url = "http://rsannisa-cikarang.com/index.php/2015-09-29";
		$html = file_get_html($url);

		$table = $html->find('section[class="entry-content"] div[class="wrapper"] div[class="supertable-col supertable-col-first supertable-col-odd supertable-col-1"]')->plaintext;
		$data = array(
				'name' => $table
				);

        $this->load->view('v_annisa', $data);
    }
}

?>