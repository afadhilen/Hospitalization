<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
		<?php
		include('application/libraries/libs/simple_html_dom.php');
		$this->load->helper('text');

		$url = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html = file_get_html($url);
		$name = $html->find('div[class="col-md-offset-2 head-section"] h1');
		$address = $html->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 0);
		$phone = $html->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 1);
		$email = $html->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 3);

		foreach ($name as $nme) {
			echo($nme);
		}
			echo($address);
			echo($phone);
			echo($email);
			echo "<hr>";

		$url2 = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-lippo-cikarang.html";
		$html2 = file_get_html($url2);
		$name2 = $html2->find('div[class="col-md-offset-2 head-section"] h1');
		$address2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 0);
		$phone2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 1);
		$email2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 3);

		foreach ($name2 as $nme2) {
			echo($nme2);
		}
			echo($address2);
			echo($phone2);
			echo($email2);
			echo "<hr>";


		$url3 = "http://mitrakeluarga.com/cikarang/tentang-kami/kontak-kami/";
		$html3 = file_get_html($url3);
		$name3 = $html3->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] h2');
		$address3 = $html3->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p br"]',0);
		//$phone3 = $html3->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p br"]',0);
		$email3 = $html3->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p', 1);

		foreach ($name3 as $nme3) {
			echo($nme3);
		}	
			echo $address3;
			echo($email3);
			echo "<hr>";

		$url4 = "http://mitrakeluarga.com/bekasi/tentang-kami/kontak-kami/";
		$html4 = file_get_html($url4);
		$name4 = $html4->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] h2');
		$address4 = $html4->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p br"]',0);
		//$phone2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 1);
		$email4 = $html4->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p', 1);

		foreach ($name4 as $nme4) {
			echo($nme4);
		}
			echo($address4);
			//echo($phone2);
			echo($email4);
			echo "<hr>";

		$url5 = "http://mitrakeluarga.com/bekasitimur/tentang-kami/kontak-kami/";
		$html5 = file_get_html($url5);
		$name5 = $html5->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] h2');
		$address5 = $html5->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p br"]',0);
		//$phone2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 1);
		$email5 = $html5->find('div[class="wpb_text_column wpb_content_element"] div[class="wpb_wrapper"] p', 1);

		foreach ($name5 as $nme5) {
			echo($nme5);
		}
			echo($address5);
			//echo($phone2);
			echo($email5);
			echo "<hr>";

		$url6 = "http://www.harapan-keluarga.co.id/hubungi-kami/";
		$html6 = file_get_html($url6);
		$name6 = $html6->find('div[class="footer-widget-box footer-widget-box-last"] ul[class="widget-container"] h3');
		$address6 = $html6->find('div[class="entry clearfix"] p', 1);
		//$phone2 = $html2->find('div[class="col-md-6"] div[class="row"] div[class="col-md-9"]', 1);
		$email2 = $html6->find('div[class="entry clearfix"] p', 2);
		foreach ($name6 as $nme6) {
			echo($nme6);
		}
			echo($address6);
			//echo($phone2);
			echo($email2);
			echo "<hr>";

		$url7 = "http://hosana-medica.com/lippo-cikarang/";
		$html7 = file_get_html($url7);
		$name7 = $html7->find('div[class="su-column-inner su-clearfix"] strong', 0);
		$address7 = $html7->find('div[class="su-column-inner su-clearfix"]', 0)->plaintext;
		$phone7 = $html7->find('div[class="su-column-inner su-clearfix"] p', 0);
		$email7 = $html7->find('div[class="su-column-inner su-clearfix"] p', 2);

		echo($name7);
		echo "<br>";
		
			echo($address7);
		
			echo($phone7);
			echo($email7);
			echo "<hr>";

		$url8 = "http://hosana-medica.com/cikarang-baru/";
		$html8 = file_get_html($url8);
		$name8 = $html8->find('div[class="su-column-inner su-clearfix"] strong', 0);
		$address8 = $html8->find('div[class="su-column-inner su-clearfix"]', 0)->plaintext;
		$phone8 = $html8->find('div[class="su-column-inner su-clearfix"] p', 0);
		$email8 = $html8->find('div[class="su-column-inner su-clearfix"] p', 2);

		echo($name8);
		echo "<br>";
		
			echo($address8);
		
			echo($phone8);
			echo($email8);
			echo "<hr>";

		$url9 = "http://hosana-medica.com/bekasi/";
		$html9 = file_get_html($url9);
		$name9 = $html9->find('div[class="su-column-inner su-clearfix"] strong', 0);
		$address9 = $html9->find('div[class="su-column-inner su-clearfix"]', 0)->plaintext;
		$phone9 = 'Telp : (021) 822 1573';
		$email9 = $html9->find('div[class="su-column-inner su-clearfix"] p', 1);

		echo($name9);
		echo "<br>";
		
			echo($address9);
			echo "<br/>";
			echo($phone9);

			echo($email9);
			echo "<hr>";

		$url0 = "http://rsannisa-cikarang.com/index.php/pages/contact-us";
		$html0 = file_get_html($url0);
		$name0 = $html0->find('div[class="contact-info"] p', 0);
		$address0 = $html0->find('div[class="contact-info"] p', 1);
		$phone0 = $html0->find('div[class="contact-info"] p', 3);
		//$email2 = $html2->find('div[class="contact-info"] p', 6);
		$email0 = 'Email : info@rsannisa-cikarang.com';

		echo($name0);	
		echo($address0);
			echo($phone0);
			echo($email0);
			echo "<hr>";		
		?>

	</body>
</html>