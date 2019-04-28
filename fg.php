<?php
$radio = $_POST['radio'];
if($radio=="view")
{
    header("Location:View.html");
    exit();
}
if($radio=="update")
{
     header("Location:update.html");
     exit();
}  
else
{
	echo "<br><hr><h1 align=\"center\">Invalid Choice</h1><hr>";
     
}
?>
     