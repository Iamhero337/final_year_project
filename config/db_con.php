<?php 
$servername="localhost";
$username="root";
$password="";
$db="college_project";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
{
    //echo "Connection successfully";
}
else
{
	echo "Not Connected";
}
?>