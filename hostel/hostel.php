<?php include('account_logout.php');;?>
<html>
    <head>
        <style>
            body{
                background-color:gray ;
            }
            form{
         align-items: center;
                background-color:rgb(49, 155, 133);
                width: 40%; 
                height:200px;
                font-size: 35px;
                border-radius: 54px;
            }
        </style>
        <title>

        </title>
    </head>
    <body>
        <form action="hostel.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
&nbsp;&nbsp;
        <label for="HOSTEL NAME">Room number</label>
            <input type="number" name="room" placeholder="Room number" required style="background-color: greenyellow;"><br><br>
            &nbsp;&nbsp;
            <label for="hostel name"> HOSTEL_NAME</label>
            <select name="hostel_name" style="background-color: greenyellow;" required>
                <option value="Titanic">Titanic</option>
                <option value="Benghazi">Benghazi</option>
                <option value="Misereole">Misereor</option>
                <option value="Titanic">Vuba</option>
                <option value="Benghazi">Kiza</option>
                <option value="Misereole">Cambodge</option>
            </select> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="submit" style="background-color: greenyellow;">Submit</button>
        </form>
    </body>
    <?php include('footer.php');;?>
</html>