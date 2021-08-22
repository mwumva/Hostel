	<!DOCTYPE html>
	<html>
	<head>
		<title>user details</title>
	
	
	
	<style type="text/css">
	 		
	 		table{
	 		background-color:rgb(49, 155, 133);
	 		}
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
// Create connection
include('connect.php');
// Check connection 
if (!$conn) {
    die("Connection failed: " . $mysqli_eeror($conn));//the error message incase of failed to connect
}

$sql = "SELECT * FROM applied WHERE decision='Allowed'";
$result = mysqli_query($conn,$sql);

if(!$result) {
	 echo "Something is wrong".mysqli_error($con);}
    // output data of each row
	 else{?>
<table border="4"cellpadding="5" cellspacing="5" style="width: 80%;">
			   <tr>
	 	          <th>Registration Number</th>
	 	            <th>First Name</th>
				  <th>Last Name</th>
				  <th>Nationality</th>
				  <th>Email</th>
				  <th>Student phone</th>
				  <th>Gender</th>
				  <th>College</th>
				  <th>Level</th>
				  <th>Sponsorship</th>
				  <th>gurdian phone</th>
				  <th  style="background-color:gray;">Decision</th>
				  <th  style="background-color:gray;">Hostel Name</th>
				  <th  style="background-color:gray;">Room</th>
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
   <td><?php echo $row["sponsorship"]; ?></td>
   <td><?php echo $row["guardian_phone"]; ?></td>
   <td><?php echo $row["Decision"]; ?></td>
   <td><?php echo $row["hostel_name"]; ?></td>
   <td><?php echo $row["room"]; ?></td>
  </tr>
				<?php 
			}
			echo "</table>";
	   }
   //
?>
<?php

include('footer.php');

?>
</body>
	</html>