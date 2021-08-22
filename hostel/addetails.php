<!DOCTYPE html>
<html>
<head>
   <style type="text/css">
      body{
         background-color: gray;
      }
   </style>
   <title>admin detail</title>
</head>
<body>
   <?php
      include("sidenav.php");  
   include("connect.php");
   include("account_logout.php"); 
 
   $r = "SELECT * FROM accounts WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
      echo "Failed";
   }
   while($d = mysqli_fetch_assoc($dx)){
     echo' <center style="font-size: 3em;">';
    echo '<br><br><br><br>';
      echo "Admin firstname: ".$d["firstname"]."<br/>";
      echo "Admin lastname: ".$d["lastname"]."<br/>";
      echo "Admin hostel_name: ".$d["hostel_name"]."<br/>";
      echo "Admin email: ".$d["email"]."<br/>";
    echo '</center>';
   }
   
?>
<?php
 include("footer.php");
 ?>
</body>
</html>