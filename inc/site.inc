<?php

function load_site(){
	$file = get_template_directory().'/site.json';
	
	if(!file_exists($file)) {
		return null;
	}
	
	$handle = fopen($file,'r');
	if($handle !== false) {
		$data = fread($handle,filesize($file));
	} else {
		return null;
	}

	return json_decode($data,true);
}

// print load_site();exit;

function confget() {
	static $json;
	
	if(empty($json)) {
		$json = load_site();
	}
	
	if(null == $json) return '';
	
	$val = $json['global-header']['css']['background-color'];
	
	// print $val;
	// exit;
	return $val;
}