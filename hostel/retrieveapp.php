<?php
session_start();
if(!isset($_SESSION['id']))
{
   header("Location:home.php");
   exit();
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>user details</title>
	
	
	
	<style type="text/css">
	 		
	 		table{
	 	  background-color:rgb(49, 155, 133);	 		}
	 		body{
	 			background-color: gray;
	 		}
			 table a{
				 text-decoration: none;
			 }
	 	</style>
	 	</head>
	<body>
<?php
include('sidenav.php');
include("account_logout.php");
?>
<?php
include('connect.php');
// Check connection 
if (!$conn) {
    die("Connection failed: " . $mysqli_eeror($conn));
}

$sql = "SELECT * FROM applied";
$result = mysqli_query($conn,$sql);

if(!$result) {
	 echo "Something is wrong".mysqli_error($con);}
    // output data of each row
	 else{?><center style="font-size: 2.5em;">
		<p>You can manage all students applied here.!!By making a decision on their Application.</p>
   </center>
   <center>
<table border="4"cellpadding="5" cellspacing="5" style="width: 1280px;margin-bottom:35px;">
			   <tr>
	 	          <th>Reg number</th>
	 	            <th>firstname</th>
				  <th>lastname</th>
				  <th>nationality</th>
				  <th>email</th>
				  <th>student phone</th>
				  <th>Gender</th>
				  <th>college</th>
				  <th>level</th>
				  <th colspan="3"style="background-color: gray;">Action</th>
				  <th colspan="3" style="background-color: gray;">Desicion</th>
			   </tr>
			<?php	
    while($row = mysqli_fetch_assoc($result)) {?>
<tr>
	<td><?php echo $row["Reg_number"]; ?></td>
   <td><?php echo $row["firstname"]; ?></td>
   <td><?php echo $row["lastname"]; ?></td>
   <td><?php echo $row["nationality"]; ?></td>
   <td><?php echo $row["email"]; ?></td>
   <td><?php echo $row["phonenumber"]; ?></td>
   <td><?php echo $row["gender"]; ?></td>
   <td><?php echo $row["college"]; ?></td>
     <td><?php echo $row["level"]; ?></td>
					
		<td ><a href="udetails.php?id=<?php echo $row['Id']; ?>">View</a></td>
					<td ><a href="update.php?id=<?php echo $row['Id']; ?>">Edit</a></td>
					<td ><a href="uDelete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
					<td><a href="allow.php?id=<?php echo $row['Id']; ?>&decision=allowed">Allowed</a></td>
					<td><a href="allow.php?id=<?php echo $row['Id']; ?>&decision=notallowed">Not allowed</a></td>
				</td>
				</tr>
				<?php 
			}
			echo "</table></center>";
	   }
   //
?>
<?php

include('footer.php');

?>
</body>
	</html>