<?php 
include('connect.php');
include('account_logout.php');
?>
<style>
   body{
      background-image: url('images/mize2.png');
      background-repeat: no-repeat;
      background-size: cover;
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}     form{
   margin-left: 50px;
         max-width: 300px; 
      border: 4px solid black;
      background-color:gray;
      float:left;
      -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
      border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
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
   </style>
     <center>
<form action="updatehost.php" method="POST">
   <?php
     $sql="SELECT* FROM hostels WHERE hostel_id='".$_GET['id']."';";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
        if($row=mysqli_fetch_assoc($result))
        {
   ?>
        <label>Hostel name</label>
                        <input type="text" name="hostel" value="<?php echo $row['hostel_name']; ?>">
                        <label>Numbers of rooms</label>
                        <input type="text" name="room" value="<?php echo $row['room_number']; ?>">
             <label>Room capacity</label>
                        <input type="text" name="room_c" value="<?php echo $row['room_capacity']; ?>">
                      
                        <input type="hidden" name="id" value="<?php if(isset($_GET['id'] )){echo $_GET['id'];}  ?>">
                        <button type="submit" name="edit">Edit</button>
    <?php
        }
      }
    ?>                  
</form>
   </center>
<?php
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
   $hostel=$_POST['hostel'];
   $room_number=$_POST['room'];
   $room_c=$_POST['room_c'];
   $errors= array();
   if(empty($errors)==true){
       $sql="UPDATE hostels SET hostel_name='$hostel',room_number='$room_number',room_capacity='$room_c' WHERE hostel_id='$id'";
     if(mysqli_query($conn,$sql)) 
      {
        header("Location:retrievehost.php?hostel_id=$id");
       exit();
      }
      else
      {
          echo $id;
      }
       
       
   }else{
      print_r($errors);
   }
 }
 include('footer.php');
?>
