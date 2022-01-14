<?php

// For add'active' class for activated route nav-item
if(!function_exists('active_class')) {
	function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
  }
}

// For checking activated route
if(!function_exists('is_active_route')) {
	function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
  }
}

// For add 'show' class for activated route collapse
if(!function_exists('show_class')) {
  function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
  }
}

// For generateUUID
if(!function_exists('generateUUID')){
	function generateUUID() {
		return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			// 32 bits for "time_low"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

			// 16 bits for "time_mid"
			mt_rand( 0, 0xffff ),

			// 16 bits for "time_hi_and_version",
			// four most significant bits holds version number 4
			mt_rand( 0, 0x0fff ) | 0x4000,

			// 16 bits, 8 bits for "clk_seq_hi_res",
			// 8 bits for "clk_seq_low",
			// two most significant bits holds zero and one for variant DCE1.1
			mt_rand( 0, 0x3fff ) | 0x8000,

			// 48 bits for "node"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
		);
	}
}
