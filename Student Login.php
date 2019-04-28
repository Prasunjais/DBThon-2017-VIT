<?php
	$conn = mysqli_connect("localhost","root","","dbthon") or die("Unable to connect!");
	echo "Connected<br>";
    
    	$ID = $_POST["sID"];
		$pass = $_POST["sPass"];
	$query = "SELECT * FROM student WHERE Reg_no='$ID' AND Password='$pass'";
    $executed = mysqli_query($conn,$query);
    if(!$executed)
    {
        echo "<br><hr><h1 align=\"center\">INTERNAL ERROR</h1><hr>";
    }
    else
    {
    $num_row = mysqli_num_rows($executed);
    $row = mysqli_fetch_array($executed);
    if( $num_row ==1 )
         {
          echo "<br><hr><h1 align=\"center\">Welcome $user</h1><hr>";
          header("Location:View Attendance.html");
		  exit();
         }
    else
         {
         echo "<br><hr><h1 align=\"center\" style=\"color:red\">INVALID LOGIN!</h1><h3>Please Check your username and password</h3><hr>";

         }
    }
    
?>