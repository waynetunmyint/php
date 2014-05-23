<?php
		$url="http://localhost/php/json_generator.php";
		$json = file_get_contents($url);
		$data = json_decode($json, TRUE);
		//$this->set('_serialize', array('data'));
		echo "<pre>";
		var_dump($data);