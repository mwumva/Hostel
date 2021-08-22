<!DOCTYPE html>
<html>
<head>
   <style type="text/css">
      body{
         background-color: gray;
      }
   </style>
   <title>Hostel detail</title>
</head>
<body>
   <?php
      include("sidenav.php");  
   include("connect.php");
   include("account_logout.php"); 
 
   $r = "SELECT * FROM hostels WHERE hostel_id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
      echo "Failed";
   }
   while($d = mysqli_fetch_assoc($dx)){
     echo' <center style="font-size: 3em;">';
    echo '<br><br><br><br>';
      echo "The hostel name: ".$d["hostel_name"]."<br/>";
      echo "Number of rooms available: ".$d["room_number"]."<br/>";
      echo "Room type: ".$d["room_type"]."<br/>";
      echo "capacity  of each room: ".$d["room_capacity"]."<br/>";
    echo '</center>';
   }
   
?>
<?php
 include("footer.php");
 ?>
</body>
</html>