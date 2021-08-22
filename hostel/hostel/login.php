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
  background-image: url('images/beng.png');
  background-size: cover;
  background-repeat: no-repeat;
}.container{
        width:95%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    } input {
      transition: all 0.5s linear;
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
   margin-left: 50%;
         max-width: 300px; 
      border: 4px solid black;
      background-color:gray;
      float:left;
      border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
  -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
}
input{
      width: 90%;
      padding: 10px 5px;
      border-bottom: 1px solid black;
      border-radius: 10px 10px 10px 10px;
      outline:none;
      margin: 10px 10px 10px 10px;
      }
      input[type=file]{
      width: 90%;
      padding: 10px 5px;
      margin: 10px 10px 10px 10px;
      }
      button {
      background-color: yellowgreen;
      color: white;
      padding: 10px 0;
      margin: 10px 0;
      border: none;
      cursor:pointer;
      width: 40%;
      padding:auto;
      }
      button:hover {
      opacity: 0.9;
      }
label
{
margin-left:40px;
font-size:16px;
font-weight:bold;
}
  /* set a hover effect for the button*/
  button:hover {
    opacity: 0.8;
    }
    @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0)
    }
    to {
      -webkit-transform: scale(1)
    }
  }
    @keyframes animatezoom {
    from {
      transform: scale(0)
    }
    to {
      transform: scale(1)
    }
  }
  /*smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
</style>
</head>
<body>
 <div>
  <form class="" action="login1.php" method="POST" style="width:50%;">
  <b><h1> login here</h1></b>
      <div class="container">
          <label><b>Email</b></label><br>
          <input type="email" placeholder="Enter your associated email address" name="email" maxlength="50">
<br><br><br>
          <label><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="password"maxlength="20">
<br><br>
         <center> <input type="submit" name="login" style="border-radius: 100px;
 background-color:yellowgreen;" value="login"><br>
</center>         <br>        <input type="checkbox" checked="checked"> <br>Remember me
		 <br><br><br><center>Don't you have an account?
     <a href="signup.php"  style="background-color: yellowgreen; size:16px">Sign up</a>
		  </center>
      </div>
           </div> </form>
  <br><br>
  <?php
  include('footer.php');?>
</div>
</body>
</html> 