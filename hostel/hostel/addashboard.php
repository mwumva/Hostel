<?php
session_start();
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
background-color:yellowgreen;
position: relative;
width: 30%;
height:50px;
float: left;
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

	?>
	<center>
	<div class="da"><center>
		<p style=":text-align: justify; text-justify: inter-word; font-size:50px;">
		 UR Huye Campus hostel application portal</p>
		</center>
		<div class="db">
		<center style="background-color: gray"><a href="retrieve.php" style="font-size: 20px">My profile</a></td></center>
		</div>
		<div class="db">
		<center style="background-color: gray">	<a href="retrieveapp.php" style="font-size: 22px">Manage students</a></center>
		</div>
<div class="db">
		<center style="background-color: gray">	<a href="hostog.php" style="font-size:22px">Manage Hostels</a></center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html>

