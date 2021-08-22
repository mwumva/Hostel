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
include('connect.php');
// Check connection 
if (!$conn) {
    die("Connection failed: " . $mysqli_eeror($conn));
}

$sql = "SELECT * FROM hostels";
$result = mysqli_query($conn,$sql);

if(!$result) {
	 echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
	 else{?><center style="font-size: 2.5em;">
		<p>You can manage all Hostels  here doing any of the action among the choice.</p>
   </center><center>
<table border="4"cellpadding="5" cellspacing="5" style="width: 1280px;">
			   <tr>
	 	          <th>Hostel Name</th>
	 	            <th>Number of Rooms</th>
				  <th>Room Type</th>
				  <th>Room Capacity</th>
                  <th colspan="3">Action</th>
			   </tr>
			<?php	
    while($row = mysqli_fetch_assoc($result)) {?>
<tr>
	<td><?php echo $row['hostel_name']; ?></td>
   <td><?php echo $row["room_number"]; ?></td>
   <td><?php echo $row["room_type"]; ?></td>
   <td><?php echo $row["room_capacity"]; ?></td>

						<td><a href="view.php?id=<?php echo $row['hostel_id']; ?>">View</a></td>
					<td><a href="updatehost.php?id=<?php echo $row['hostel_id']; ?>">Edit</a></td>
					<td><a href="hdelete.php?id=<?php echo $row['hostel_id']; ?>">Delete</a></td>
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