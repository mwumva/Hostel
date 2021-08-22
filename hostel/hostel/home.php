
   <?php 
include('sidenav.php');
      ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body 
{
  font-family: "Lato", sans-serif;
  background-repeat: no-repeat;
  background-size: cover;
}


    .container{
        width:95%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
      }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg" background="images/cambo.png">
 <?php echo '<center>';
include('sidebar.php');
 echo '</center>';
      ?>
      <?php 
include('footer.php');
      ?>
   
</body>
</html> 