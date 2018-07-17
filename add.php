<?php 
include 'db.php' ; 

if(isset($_POST['send']))
{
	$task_name=$_POST['task'];
	$sql ="insert into tasks (task_name) values ('$task_name')";
	$val=$db->query($sql);
	if($val)
	{
		header('location:index.php');
	}
}


?>