<?php
include_once "../../../config/config.php";

//$user = new userApps(array());
$user = new GCUser();
foreach(array('auto_refresh_mapfiles', 'save_to_tmp_map') as $key) {
	$value = (isset($_POST[$key]) && $_POST[$key] == 'checked');
	$_SESSION[$key] = $value;
	$user->saveUserOption($key, $value);
}

die(json_encode(array('result'=>'ok')));