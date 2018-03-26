<?php

$LOCALACCESS = true;

function debug($message){
	if(!(empty($_GET['debug']))){
		print($message);
	}
}

require_once('mysql_connect.php');

if(empty($_GET['action'])){
	$_GET['action']='read';
}
$output = [
	'success'=>false,
	'errors'=>[],
	'data'=>[]
];

// $output = new stdClass();
// $output->success = false;
// $output->errors = [];
// $output->data = [];

switch($_GET['action']){
	case 'read':
		include('actions/read.php');
		break;
	case 'create':
		include('actions/create.php');
		break;
	case 'update':
		include('actions/update.php');
		break;
	case 'delete':
		include('actions/delete.php');
		break;
}
debug('O');
$json_output = json_encode($output);

print($json_output);

?>














