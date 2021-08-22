<?php 
$conn = mysqli_connect('localhost', 'root', '','usersaccounts');

if(!$conn)
{
echo 'Connection error: '. mysqli_connect_error();
}
?>