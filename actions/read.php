<?php

if(empty($LOCALACCESS)){
	die('no direct access allowed');
}

$table = '`users`';

$query = "SELECT * FROM $table";

$result = mysqli_query($conn, $query);

if($result){
	//the query worked
	if(mysqli_num_rows($result)>0){
		$output['success']=true;
		while($row = mysqli_fetch_assoc($result) ){
			$output['data'][] = $row;
		}
	} else {
		$output['errors'][] = 'no data available';
	}
} else {
	//the query did not work
	$output['errors'][] = 'query failed';
}

?>