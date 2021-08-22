
<?php
include('sidenav.php');
include('account_logout.php');
	?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="box1.css">
	<style>
body{
	background-color:transparent;

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
background-color:transparent;
position: relative;
width: 30%;
height:50px;
float: left;
margin-left: 30px;
margin-top: 50px
	}
	a{
		text-decoration: none;
	}
	</style>

</head>
<body>
	<div class="da"><center>
		<p style=":text-align: justify; text-justify: inter-word; font-size:50px;">
		Admin manage Hostel here.</p>
		</center>
		<div class="db">
		<center style="background-color: transparent"><a href="retrievehost.php" style="font-size: 20px">View all</a>
</td></center>
		</div>
<div class="db">
		<center style="background-color: transparent">	<a href="host.php" style="font-size: 20px">Add Hostel</a> </center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html
