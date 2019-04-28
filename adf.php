<?php
$radio = $_POST['radio'];
if($radio=="stud")
{
    header("Location:Student Register.html");
    exit();
}
if($radio=="fac")
{
     header("Location:Register.html");
     exit();
} 
else
{
	echo "<br><hr><h1 align=\"center\">Invalid Choice</h1><hr>";
     
} 
?>
     