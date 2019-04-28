<?php
	$conn = mysqli_connect("localhost","root","","DBthon") or die("Unable to connect!");
	echo "Connected<br>"; 
   		$idt = $_POST['reg'];
	
    $query = "UPDATE attends set class_attend=class_attend+1 where Reg_no='$idt';";
    $executed = mysqli_query($conn,$query);
    if(!$executed)
        echo "<br><hr><h1 align=\"center\">INTERNAL ERROR</h1><hr>";
    else
        echo "<br><hr><h1 align=\"center\">Attendance Updated</h1><hr>"
?>