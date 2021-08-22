<?php
include('connect.php');
$decision=$_GET['decision'];
$id=$_GET['id'];
if($decision=='allowed')
{
	$SQL="UPDATE applied SET decision='Allowed' WHERE Id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('Student application Allowed')</script> ";
	
	header("Location:hostel.php?id=$id");
	exit();
}
elseif ($decision=='notallowed')
{
	$SQL="UPDATE applied SET decision='not Allowed' WHERE Id='$id'";
	mysqli_query($conn,$SQL);
    echo "<script> alert('student not Allowed')</script> ";
}

 ?>