
<?php
   if(isset($_POST['apply'])){
     echo "<br/>";
     $registration = $_REQUEST["regnumber"];
     $firstname = $_REQUEST["firstname"];
     $lastname = $_REQUEST["lastname"];
     $nationality = $_REQUEST["nationality"];
     $email= $_REQUEST["email"];
     $sphone= $_REQUEST["sphone"];
     $birthdate = $_REQUEST["birthdate"];
     $gender = $_REQUEST["sex"];
     $college = $_REQUEST["college"];
     $level = $_REQUEST["level"];
     $sponsorship = $_REQUEST["sponsorship"];
     $gphone = $_REQUEST["gphone"];
     $sql=" SELECT * FROM applied WHERE email='$email'";

     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
       echo '<script>alert("The entered details is  already found in our database!");</script>';
       exit();
     }
     else{
     
     $query = "INSERT INTO applied(Reg_number, firstname, lastname,nationality,email,phonenumber,birthdate,gender,college,level,sponsorship,guardian_phone) 
     VALUES (' $registration','$firstname','$lastname','$nationality','$email','  $sphone','$birthdate',' $gender',' $college','$level','$sponsorship','$gphone ')";
     
     $result = mysqli_query($conn, $query);
     if(!$result){
       echo "Not processed! ".mysqli_error($conn);
     }else{
       echo '<script> alert("Registration is done!")</scriptr>';
     }}
   }
     
     
     //echo "Revieve is clicked!
?>