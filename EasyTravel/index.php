<?php
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from course_info order by id DESC";

$result = $crud->getData($query);

?>
<a href="diuadd.php">Add New Data</a>
<table border="1">

	<tr>
		<td> SL </td>
		<td> Course Title </td>
		<td> Course Code </td>
		<td> Credit </td>
		<td> Total Section </td>
		<td> Section Capacity</td>
		<td> Action</td>
	</tr>
	<?php
	
	if($result){
	 $count = 1;
	 
	 foreach($result as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$count."</td>";
		 echo "<td>".$res['course_title']."</td>";
		 echo "<td>".$res['course_code']."</td>";
		 echo "<td>".$res['credit']."</td>";
		 echo "<td>".$res['t_num_sec']."</td>";
		 echo "<td>".$res['sec_capacity']."</td>";
		 echo "<td><a href='edit.php?id=$res[id]'>Edit</a> | 
		 <a href='delete.php?id=$res[id]'>Delete</a></td>";
		 echo "</tr>";
		 $count++;
	 }
	 
	} else{
		echo "<tr><td colspan='6'>There is no Data Found!</td></tr>";
	}
	 ?>
</table>