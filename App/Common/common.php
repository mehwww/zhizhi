<?php
function p($array) {
	dump ( $array, 1, '', 1 );
}
function is_pjax() {
	return array_key_exists ( 'HTTP_X_PJAX', $_SERVER ) && $_SERVER ['HTTP_X_PJAX'];
}
function email_validate(String $parm) {
	$emailRegex = '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/';
	return preg_match ( $emailRegex, $parm ) === 1;
}
function int_validate(String $parm) {
	$intRegex = '/^\d+$/';
	return preg_match ( $intRegex, $parm ) === 1;
}
