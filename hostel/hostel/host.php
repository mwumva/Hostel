<?php
include("account_logout.php");
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
    border: 4px solid black;
  border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
  margin-left: 50%;
    width: 30%;
    height: 360px;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  padding: 10px;
margin: bottom 10px top 30px;
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
  <form action="host.php" method="POST" style="align-items: center;">
    <div>
      <h1>Register Hostel here</h1>
      <label for="Hostel name"><b> Hostel Name:</b></label>
      <input type="text" placeholder="enter the hostel name" name="hostel_name" required>
<br><br>
      <label for="number of rooms"><b>Number of rooms</b></label>
      <input type="number" name="room"  placeholder="enter the number of rooms" required minlength="1" maxlength="3">
      <br><br>
      <label>   
       Room Type:
        </label> <br> <br> <br> 
        <label for="Male">   Male 
       </label> 
        <input type="radio" name="type" value="male"  required> 
        <label for="Female">      Female   
    </label> 
      <input type="radio" name="type" value="female" required>
        <br><br>  
        <label for="room capacity"><b>Capacity of our rooms</b></label>
      <input type="number" name="capacity"  placeholder="enter the room capacity" required minlength="1" maxlength="3">
      <br><br>
<button name="register" style="float:right;background-color:yellowgreen;"> Register</button></div>
  </form> 
  <br><br><br>
</div>
<?php
echo '<center>';
   if(isset($_POST['register'])){
     echo "<br/>";
     $hostel = $_REQUEST["hostel_name"];
     $room = $_REQUEST["room"];
     $type= $_REQUEST["type"];
     $capacity= $_REQUEST["capacity"];
     $sql=" SELECT * FROM hostels WHERE hostel_name='hostel;'";

     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
       echo '<script>alert("The entered details is  already found in our database!");</script>';
       exit();
     }
     else{
     
     $query = "INSERT INTO hostels(hostel_name, room_number,room_type,room_capacity) 
     VALUES (' $hostel','$room','$type','$capacity')";
     
     $result = mysqli_query($conn, $query);
     if(!$result){
       echo "Not processed! ".mysqli_error($conn);
     }else{
       echo '<script> alert("Registration is done!")</scriptr>';
     }}
   }
    echo '</center>';
     
     //echo "Revieve is clicked!
include('footer.php');

?>
</body>
</html>