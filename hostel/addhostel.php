<?php 
include('connect.php');

?>
<style>
   .main-block
{
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}
.formcontainer {
      max-width: 300px; 
      border:1px solid black;
      background-color:white;
      float:left;
      }
      input,select{
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
      .formcontainer button {
      background-color: #034e94;
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
<div class="flex-container">
<div class="formcontainer">
<form action="update2.php" method="POST" enctype="multipart/form-data">
                      <label>Registration number</label>
                      <input type="text" name="regnumber">
                        <label>First name</label>
                        <input type="text" name="name">
                        <label>lastname</label>
                        <input type="text" name="lastname">
                        <label>Nationality</label>
                        <input type="text" name="nationality">
                      
                                  <input type="hidden" name="id" value="<?php if(isset($_GET['id'] )){echo $_GET['id'];}  ?>"/>
                        <button type="submit" name="edit">Edit</button>
                      
</form>
</div>

<?php
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
       $registration=$_POST['regnumber'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $nationality=$_POST['nationality'];
   $errors= array();
   if(empty($errors)==true){
       $sql="UPDATE applied SET Reg_number='$registration',firstname='$firstname',lastname='$lastname', nationality='$nationality' WHERE Id='$id'";
     if(mysqli_query($conn,$sql)) 
      {
        header("Location:retrieveapp.php");
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
?>
