<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_GET['id'];
	
	$query = "select * from course_info where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $key => $res){
		$course_code = $res['course_code'];
		$course_title = $res['course_title'];
		$credit = $res['credit'];
		$t_num_sec1 = $res['t_num_sec'];
		$sec_capacity1 = $res['sec_capacity'];
	}
?>
<form action="editaction.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id?>"/>
	<input type="text" name="course_code" value="<?php echo $course_code;?>"/>
	<input type="text" name="course_title" value="<?php echo $course_title;?>"/>
	<input type="text" name="credit" value="<?php echo $credit;?>"/>
	<input type="number" name="t_num_sec" value="<?php echo $t_num_sec1;?>"/>
	<input type="number" name="sec_capacity" value="<?php echo $sec_capacity1;?>"/>
	<input type="submit" name="update" value="update"/>
</form>