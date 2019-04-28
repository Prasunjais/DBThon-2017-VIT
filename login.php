<?php
/**
 * @author prasun jaiswal
 * @copyright 2017
 */
 session_start();
 if (isset($_POST['submit'])) {
if (empty($_POST['uid']) || empty($_POST['pass'])) {
$error = "Username & Password cannot be left Blank";
echo "<br><hr><h1 align=\"center\">$error</h1><hr>";
}
else
{
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
$user = $_POST['uid'];
$pass = $_POST['pass'];

$query = "SELECT * FROM faculty WHERE fac_id='$user' AND pass='$pass'";
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
      	header("Location:fac1.html");
	    exit();	
     }
else
     {
     echo "<br><hr><h1 align=\"center\" style=\"color:red\">INVALID LOGIN!</h1><h3>Please Check your username and password</h3><hr>";
     	
     }
}
}
}
?>