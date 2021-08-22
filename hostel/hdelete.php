<?php
   include("connect.php");
   
   $r = "DELETE FROM hostels WHERE hostel_id =".$_GET['id'].";";
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	  header('location:retrievehost.php');
   }
       
   
?>