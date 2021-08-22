<?php
include('sidenav.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color:rgba(177,178,179,0.5);
}
/* Add some padding on document's body to prevent the content
    to go underneath the header and footer */

    .container{
        width:95%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color:cadetblue;
}
a{
  text-decoration:none;
color:indigo;
/* all  image containers (use 25% for four, and 50% for two, etc) */

* {
  box-sizing: border-box;

/* all  image containers (use 25% for four, and 50% for two, etc) */

* {
  box-sizing: border-box;
}
</style>
</head>
<body>
  <h2 style="text-align:center;"><i><b style="font-size:17px;"><font size="19px">What behind the UR huye campus's hostels names?</font></b></i><br>
  Some of the hostels like Vietnam, Cambodge, Misereor, and Kiza were built in the 1960s when the University had just been established. But how did these hostels come to be named this way?
</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/mize.gif" alt="Mizereor" style="width:100%">
      <div class="container">
        <h2>Mizereor</h2>
        <p>Those hostels are the one which was reserved for two persons per Room</p>
        <p>They include some basic material required to the students only Boys</p>
        <p><a href="mize.php"><center>More</center></a></p>
      </div>
    </div>
  </div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/nyarutarama.gif" alt="nyarutarama" style="width:100%">
      <div class="container">
        <h2>Nyarutarama</h2>
        <p>Those hostels are the one which was reserved for two persons per Room</p>
        <p>They include some basic material required to the students only Boys</p>
        <p><a href="nyarutarama.php"><center>More</center></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/cambodge.gif" alt="cambodge" style="width:100%">
      <div class="container">
        <h2>Cambodge</h2>
        <p> As it was among the earlty Hostels in UR HUye Campus</p>
        <p>Those hostels had played a  very important role in accommodating many students </p>
        <p>They are also for boys as well as girls can be accomodated there</p>
        <p><a href="cambodge.php"><center>More</center></a></p>
      </div>
    </div>
  </div>
 <div class="row">
  <div class="column">
    <div class="card">
      <img src="images/viete.gif" alt="viete" style="width:100%">
      <div class="container">
        <h2>Viete</h2>
        <p>Those hostels are also the earliest and they play a very good big role in hosting many students upto now.</p>
        <p>They include some basic material required to the students.And it was reserved for both girls and boys especially the one with some <b>Disabilities</b></p>
        <p><a href="viete.php"><center>More</center></a></p>
      </div>
    </div>
  </div><br><br><br><br>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="images/titanic.gif" alt="titanic" style="width:100%">
      <div class="container">
        <h2>Titanic</h2>
        <p>This is the latest hostels which had came as the solution to accomodate the lev one students.</p>
        <p>It is the most important as it can host 4 to 6 stdents per room.</p>
        <p><a href="titanic.php"><center>More</center></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/bengazi.gif" alt="bengazi" style="width:100%">
      <div class="container">
        <h2>Bengazi</h2>
      <p>Those are the latest and the mostly hostels  reserved to be served to only Girls. </p>
        <p>It was was built to solve the problems of many girls who were facing the problems related 
        to lack of hostels and other living rooms aroung UR Huye campus.</p>
        <p><a href="bengazi.php"><center>More</center></a></p>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br><br><p style="font-size: 24px;text-decoration-style: wavy;" >You can click on <b><i>MORE </i></b> And see the details about our services.
                </p>
       <?php
include('footer.php');
        ?>
   
</body>
</html> 