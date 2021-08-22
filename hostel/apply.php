<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url('images/mize.jpg');
  background-repeat: no-repeat;
  background-size:cover; 
} input {
    width: 40%;
        color:rgb(3, 3, 3);
    padding: 9px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    background-color: white;
    float: left;
      border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
  }label{
    display: inline-block;
    float:left;
        width: 250px;
}/*style the model content box*/ 
form{
  border-top-right-radius: 70px;
  border-top-left-radius:70px;
        float:right;
    width: 30%;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  padding: 10px;
margin-bottom:30px;
height:auto;
background-color: gray;"

    } /* set a hover effect for the button*/
  button:hover {
    opacity: 0.8;
    }
</style>
</head>
<body>
  <?php
include('sidenav.php');
?>
  <?php
include('applied.php');
?><section>
    <center style="font-size: 22;">
    <div class="form-popup" id="myForm">
      <form action="apply.php" method="POST" class="form-container">
    <h2>Application here</h2><br>
    <label>Reg number:</label>
            <input class="input-field" type="text" placeholder="Enter your student registration number" name="regnumber" required minlength="9" maxlength="9"><br><br>
             <label>First name:</label>
            <input class="input-field" type="text" placeholder="Enter your first name" name="firstname" required maxlength="20"><br><br>
            <label>Last name:</label>
            <input class="input-field" type="text" placeholder="Enter your second name" name="lastname" required maxlength="25"><br><br>
            <label>Nationality:</label>
            <input class="input-field" type="text" placeholder="Enter your country here" name="nationality" required maxlength="40"><br><br>
            <label>Email:</label>
            <input class="input-field" type="email" placeholder="Enter your active Email" name="email" required maxlength="25"><br><br>
            <label>Telephone number:</label>
         <input class="input-field" type="text" placeholder="phone" name="sphone" required maxlength="10"><br>  <br> 
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthdate" required> <br><br>
      <label>   
        Gender :  
        </label> <br> 
        <label for="Male">   Male 
       </label> 
        <input type="radio" name="sex" value="male"  required> 
        <label for="Female">      Female   
    </label> 
      <input type="radio" name="sex" value="female" required>
        <br><br>  
      <select aria-label="colleges" name="college"required style="color:rgb(3, 3, 3);">
            <optgroup label="colleges"  required>
              <option value="CBE">College of Bosiness and Economics</option>
          <option value="CMHS">College of Medecine and Health Sciences</option>
              <option value="CAVM">College of Agriculture and Veternery Medecine</option>
                  <option value="CST"> College of Science and Technology</option>
            </optgroup>
         </select><br><br> 
		  <label>   
        study level:  
        </label> <br>
		  <label for="YEAR 1"> YEAR 1
		  </label>
		     <input type="radio" name="level" value="YEAR 1"  required>
		  <label for="YEAR 2"> YEAR 2
		  </label>
		        <input type="radio" name="level" value="YEAR 2" required>
		  <label for="YEAR 3"> YEAR 3
		  </label>
		        <input type="radio" name="level" value="YEAR 3" required>
		  <label for="YEAR 4"> YEAR 4
		  </label>
		        <input type="radio" name="level" value="YEAR 4" required>
		  <label for="YEAR 5"> YEAR 5
		  </label>
		        <input type="radio" name="level" value="YEAR 5" required>
		  <label for="YEAR 6"> YEAR 6
		  </label>
		        <input type="radio" name="level" value="YEAR 6" required>
      <br><br> 
      <label>
        Sponsorship:
      </label>
  <label for="Government">   
  Government
        </label> 
        <input type="radio" name="sponsorship" value="Government sponsored"  required> <br>
        <label for="Private">   
      Private        </label> 
      <input type="radio" name="sponsorship" value="Private sponsored" required>
        <br><br>  
      <label>guardian phone:</label><br><br>
            <input class="input-field" type="text" placeholder="Enter the guardian phone" name="gphone" required maxlength="10">
            <br><br><br><br>
         <input type="submit" class="btnr" name="apply" value="apply" style="background-color: yellowgreen"></form>
    </div>
  </center>
   </section> 
<?php
include('footer.php');
?>
</body>
</html> 