<?php
   include("connect.php");
   include("sidenav.php");
   include("account_logout.php");
   ?><html>
      <head>
         <title></title>
         <style type="text/css">
      body{
         background-color: gray;
         display:;
      }
   </style>
      </head>
   <body background="">

   <?php
   $r = "SELECT * FROM applied WHERE Id =".$_GET['id'].";";
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
      echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
     echo'<center style="font-size: 3em;margin: top 3px;">';
     echo '<br><br><br><br>';
      echo " Registration Number: ".$d["Reg_number"]."<br/>";
      echo "First Name: ".$d["firstname"]."<br/>";
      echo "Last Name: ".$d["lastname"]."<br/>";
      echo "Nationality: ".$d["nationality"]."<br/>";
      echo "Email: ".$d["email"]."<br/>";
      echo "Telephone: ".$d["phonenumber"]."<br/>";
      echo "Birth date: ".$d["birthdate"]."<br/>";
      echo "Gender: ".$d["gender"]."<br/>";
      echo "College: ".$d["college"]."<br/>";
      echo " Year of Study: ".$d["level"]."<br/>";
      echo "Sponsorship entity: ".$d["sponsorship"]."<br/>";
      echo "Guardian Phone: ".$d["guardian_phone"]."<br/>";
      echo "</center>";
   
   }
  echo '<br><br><br><br>';
   include("footer.php");
?>