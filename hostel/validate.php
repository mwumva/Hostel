<?php
include('connect.php');
include('sidenav.php');
	?>
<html>
<head>
<meta charset="utf-8">
<title>Student dashboard</title>
<link rel="stylesheet" href="box1.css">
	<style>
body{
	background-color: red;

background-image: url('images/titanic1.png');
background-repeat: no-repeat;
background-size: cover;
}
a{
	text-decoration: none;
}

.da{
	left:150px;
background-color:transparent;
position: relative;
width: 70%;
height: 30%;
}
.db{
background-color:yellowgreen;
position: relative;
width: 30%;
height:50px;
float: left;
margin-left: 30px;
margin-top: 50px
	}
	</style>

</head>
<body background="">
	<center>
	<div class="da"><center>
    <p> <font size="14px">Are you in charge of any Hostel in UR Huye Campus?</font> </p>
		</center>
		<div class="db">
		<center style="background-color: gray"><a href="signup.php" style="font-size: 20px">YES</a></td></center>
		</div>
<div class="db">
		<center style="background-color: gray">	<a href="home.php" style="font-size: 20px">NO</a></center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html
