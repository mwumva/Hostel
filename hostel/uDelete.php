<?php
   include("connect.php");
   
   $r = "DELETE FROM accounts WHERE Id =".$_GET['id'].";";
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	  header('location:home.php');
   }
       
   
?>