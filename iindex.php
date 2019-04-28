<?php
$radio = $_POST['radio'];
if($radio=="stud")
{
    header("Location:Student Login.html");
    exit();
}
if($radio=="fac")
{
	header("Location:Login.html");
	exit();
}
if($radio=="admin")
{
	header("Location:Admin Login.html");
	exit();
}  
?>
     