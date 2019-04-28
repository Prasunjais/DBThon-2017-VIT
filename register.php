<?php

/**
 * @author 
 * @copyright 2017
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "DBthon";
$dberror = "Unable to Connect";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ($dberror);
//$link = mysqli_connect("localhost", "root", "", "demo");
if($conn == true)
{
	echo "CONNECTED TO THE CENTRAL DATABASE";
	
}
$user = $_POST['uid2'];
$name = $_POST['nam2'];
$pass = $_POST['pass2'];
$address = $_POST['address2'];
$ph = $_POST['ph2'];
$dsg = $_POST['dsg2'];
$spc = $_POST['spc2'];
$cbno = $_POST['cb2'];
$altr = $_POST['alt2'];
echo "$user";
echo "$name";
echo "$pass";
echo "$dsg";
echo "$cbno";
$query = "INSERT INTO faculty VALUES ('$user','$name','$pass','$dsg',$cbno)";
$executed = mysqli_query($conn,$query);
$per = "insert into contact_fac VALUES ('$user','$ph')";
$result = mysqli_query($conn,$per);
$query = "insert into contact_fac VALUES ('$user','$altr')";
$executed = mysqli_query($conn,$query);
if(!$executed)
{
	echo "<br><hr><h1 align=\"center\">ERROR DURING REGISTRATION</h1><hr>";
}
else
    {?>
    <script>
	alert("Welcome to our VIT Family");
	</script>
    <?php
	}
?>