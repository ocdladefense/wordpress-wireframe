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
function getSiteValue($arr, $keys) {

	$keyc = array_shift($keys);
	
	if(!empty($arr[$keyc])) {
		if(!is_array($arr[$keyc])) return $arr[$keyc];
		else return getJsonValue($arr[$keyc],$keys);
	}
	
	else return null;
}


function confget($key) {
	static $json;
	$keys = explode(".",$key);
	
	
	
	if(empty($json)) {
		$json = load_site();
	}
	
	return null == $json ? '' : getSiteValue($json, $keys);
}