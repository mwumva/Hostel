<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '','usersaccounts');

$email=$_POST['email'];
$pwd=$_POST['password'];

if(empty($email) || empty($pwd))
{
  header("Location:login.php ?error=empty");
  exit();
}
else
{
    $sql="SELECT* FROM accounts WHERE email='$email';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1)
    {
        header("Location:login.php ?error=email");
        exit();
    }
    else
    {
        while ($row=mysqli_fetch_assoc($result)) 
        {

            if(password_verify($pwd,$row['password']))
            {
                $_SESSION['name']=$row['firstname'];
                header("Location:addashboard.php");
                exit();
            }
            else
            {
               header("Location:login.php?error=pwd");
               exit(); 
            }
        }
    }
}
?>