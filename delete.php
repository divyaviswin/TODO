<?php
include "db.php";
$id=$_GET['id'];
$sql = "delete from tasks where task_id='$id'";
$val=$db->query($sql);
if($val)
{
	header('location:index.php');
}

?>