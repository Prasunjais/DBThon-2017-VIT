<?php
	$conn = mysqli_connect("localhost","root","","DBthon") or die("Unable to connect!");
	echo "Connected<br>";
    
    if( isset( $_POST['sID'] ) )
		$sID = $_POST['sID'];
	else
		$sID = "";
    if( isset( $_POST['sName'] ) )
		$sName = $_POST['sName'];
	else
		$sName = "";
    if( isset( $_POST['sCGPA'] ) )
		$sCGPA = (int)$_POST['sCGPA'];
	else
		$sCGPA = "";
    if( isset( $_POST['sProg'] ) )
		$sProg = $_POST['sProg'];
	else
		$sProg = "";
    if( isset( $_POST['sPhn'] ) )
		$sPhn = (int)$_POST['sPhn'];
	else
		$sPhn = "";
    if( isset( $_POST['sPass'] ) )
		$sPass = $_POST['sPass'];
	else
		$sPass = "";
    
    $query = "INSERT INTO student VALUES ('sID','sName','sPass','sProg',sCGPA)";
    $executed = mysqli_query($conn,$query);
    if(!$executed)
        echo "<br><hr><h1 align=\"center\">INTERNAL ERROR</h1><hr>";
    else
        echo "<br><hr><h1 align=\"center\">Sucessful</h1><hr>"
?>