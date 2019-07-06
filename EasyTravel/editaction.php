<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$course_code = $_POST['course_code'];
		$course_title = $_POST['course_title'];
		$credit = $_POST['credit'];
		$t_num_sec1 = $_POST['t_num_sec'];
		$sec_capacity1 = $_POST['sec_capacity'];
		
		$result = $crud->execute("Update course_info SET course_code='$course_code',course_title='$course_title',t_num_sec='$t_num_sec1',sec_capacity='$sec_capacity1' where id=$id");
		
		if($result){
			header("Location:index.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>