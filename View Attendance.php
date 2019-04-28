<?php
	$conn = mysqli_connect("localhost","root","","DBthon") or die("Unable to connect!");
	echo "Connected<br>"; 
   		$ID=$_POST['sID'];
	
        $sql = "SELECT * FROM attends WHERE Reg_no='$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Reg_no"]. " - Attends: " . $row["class_attend"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>