<?php
include("config/database.php");
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];
	$jsonResult=json_decode($jsonD,true); 
	if(!empty($jsonResult)){
		$db = new dbObj();
		$connString =  $db->getConnstring();
		$conn= $connString;
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$jsonD."')";
	  $queryRecord=pg_query($conn, $querytest);
	}
	if(!empty($queryRecord)){
		echo json_encode(
					array("message" => 'data  saved')
					  ); 
	}else{
	echo json_encode(
					array("message" => 'data not saved')
					  ); 
	}
					   
	?>
