<?php 
$conn = mysqli_connect('localhost', 'root', '','hostel');

if(!$conn)
{
echo 'Connection error: '. mysqli_connect_error();
}
?>