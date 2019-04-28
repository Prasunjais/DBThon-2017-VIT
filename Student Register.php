<?php
	$conn = mysqli_connect("localhost","root","","DBthon") or die("Unable to connect!");
	echo "Connected<br>"; 
   		$tID = $_POST['sID'];
		$tName = $_POST['sName'];
		$tCGPA = $_POST['sCGPA'];
		$tProg = $_POST['sProg'];
		$tPhn =  $_POST['sPhn'];
		$tPass = $_POST['sPass'];
    
    $query = "INSERT INTO student VALUES('$tID','$tName','$tPass','$tProg','$tCGPA')";
    $executed = mysqli_query($conn,$query);
    if(!$executed)
        echo "<br><hr><h1 align=\"center\">INTERNAL ERROR</h1><hr>";
    else
        echo "<br><hr><h1 align=\"center\">Sucessful</h1><hr>"
?>