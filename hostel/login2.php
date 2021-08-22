 <?php
  if(isset($_GET['error']) && $_GET['error']=="empty")
  {
  header('location:login.php');
  }
  elseif (isset($_GET['error']) && $_GET['error']=="email") 
  {
    echo 'Wrong email!';
  }
  elseif (isset($_GET['error']) && $_GET['error']=="pwd") 
  {
    echo 'Wrong password!';
  }
  ?>