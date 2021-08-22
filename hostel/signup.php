<?php
include("connect.php");//require_once("connect.php");//("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url('images/mize.png');
  background-repeat: no-repeat;
  background-size:cover; 
} input {
    width: 40%;
        color:rgb(3, 3, 3);
    padding: 9px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    background-color: white;
    float: left;
      border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
  }label{
    display: inline-block;
    float:left;
        width: 250px;
}/*style the model content box*/ 
form{
  border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
        float:right;
    width: 30%;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  padding: 10px;
margin-bottom:30px;
height:auto;
background-color: gray;"

    } /* set a hover effect for the button*/
  button:hover {
    opacity: 0.8;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg">
  <?php
  include('insert.php');
   ?>
   <?php
  include('sidenav.php');
   ?>
	<div style="align-items: center;">
  <form action="signup.php" method="POST">
    <div>
      <h1>sign up here</h1>
      <label for="firstname"><b> First name:</b></label>
      <input type="text" placeholder="enter your first name" name="firstname" required>
<br><br>
      <label for="lastname"><b>Last name:</b></label>
      <input type="text" placeholder="enter your second name" name="lastname" required>
<br><br>
 <label for="lastname"><b>Hostel name:</b></label>
      <input type="text" placeholder="enter the hostel name you are in charge" name="hostel" required>
<br><br>
      <label for="email"><b> Email:</b></label>
      <input type="email"placeholder="enter your email" name="email" required>
<br><br>
		<label for="password"><b> Password:</b></label>
    <input type="password" placeholder="create password" name="password" id="myInput" required maxlength="25" minlength="8">
<br><br>
		<label for="password"><b> confirm password:</b></label>
    <input type="password" placeholder="confirm the entered" name="conpassword" id="myInput" required>
<br><br><br><br><br><br><br><br>

      <input type="submit" name="signup" value="sign up"style="align-content: bottom;border-radius: 100px;
 background-color:yellowgreen;"><br>
		<i>Do you have an account?</i><br>
 <a href="login.php" style="float:right;margin-right:20px;background-color: yellowgreen">Login</a>
    </div>
  </form> <br><br><br>
</div>
<?php   

include('footer.php');

?>
</body>
</html> 