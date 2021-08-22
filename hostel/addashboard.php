<?php
session_start();

if(!isset($_SESSION['id']))
{
   header("Location:home.php");
   exit();
}

include('sidenav.php');
include('account_logout.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>admin dashboard</title>
<link rel="stylesheet" href="box1.css">
	<style>
body{
	background-color: red;

background-image: url('images/titanic1.png');
background-repeat: no-repeat;
background-size: cover;
}
.da{
	left:150px;
background-color:transparent;
position: relative;
width: 70%;
height: 30%;
}
.db{
background-color:transparent;
position: relative;
width: 30%;
height:50px;
float: left;
text-decoration: none;
margin-left: 30px;
margin-top: 50px
	}
	a{
		text-decoration:none;
	}

	</style>
	<rel link=text>

</head>
<body background="">
	<?php
include('header.php');
	?>
	<center>
	<div class="da"><center>
		</center>
		<div class="db">
		<center style="background-color: transparent;"><a href="retrieve.php?id=<?php echo $_SESSION['id'] ?>" style="font-size: 20px">My profile</a></td></center>
		</div>
		<div class="db">
		<center style="background-color: transparent;">	<a href="retrieveapp.php" style="font-size: 22px">Manage students</a></center>
		</div>
<div class="db">
		<center style="background-color: transparent;">	<a href="hostog.php" style="font-size:22px">Manage Hostels</a></center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html>

