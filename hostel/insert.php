<?php
//if($_SERVER['REQUEST_METHOD']=="POST")
	if(isset($_POST['signup']))
{
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $hostel=$_POST['hostel'];
  $email=$_POST['email'];
  $password=$_POST['password'];
   $conpassword=$_POST['conpassword'];
   $harshpas=password_hash($password, PASSWORD_DEFAULT);

$sql=" SELECT * FROM accounts WHERE email='$email'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  echo '<script style="background-color:red;"> alert("User already  found in our database")</script>';
  exit();
}

  $sql="INSERT INTO accounts(firstname,lastname,hostel_name,email, password) values ('$firstname','$lastname','$hostel','$email','$harshpas') ORDER BY id desc";

if ( preg_match("/^[a-zA-Z]*$/",$firstname) and preg_match("/^[a-zA-Z]*$/",$lastname)  and $_POST["password"] === $_POST["conpassword"]) {
   // success!
    mysqli_query($conn,$sql);
	    header("Location: login.php");
	echo 'your account has been created succssfully';

}
else { 
  echo '<center style="color:red">there is an error in Your input</center><br>';
  if (!preg_match('/^[0-9]*$/',$registration)) {
    # code...
    echo '<center style="color:red">invalid registration number</center>';
  }
  elseif (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
    # code...
       echo '<center style="color:red">Names can only be written in upper or lowercase letters only</center>';
  }
  elseif (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
    # code...
       echo '<center style="color:red">Names can only be written in upper or lowercase letters only</center>';
  }
else {
  echo '<center style="color:red">the entered password does not match</center>';
}}}
?>