
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
background-color:gray;
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
<body>
	<div class="da"><center>
		<p style=":text-align: justify; text-justify: inter-word; font-size:50px;">
		 UR Huye Campus hostel application portal</p>
		</center>
		<div class="db">
		<center style="background-color: gray"><a href="retrievehost.php" style="font-size: 20px">View all</a>
</td></center>
		</div>
<div class="db">
		<center style="background-color: gray">	<a href="host.php" style="font-size: 20px">Add Hostel</a> </center>
		</div>


	</div></center>
	<?php 

include('footer.php');
	?>
</body>
</html
