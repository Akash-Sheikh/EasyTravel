<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"course_info")){
		header("location:index.php");
	}


?>