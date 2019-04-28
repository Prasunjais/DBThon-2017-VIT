<?php
	$conn = mysqli_connect("localhost","root","","DBthon") or die("Unable to connect!");
	echo "Connected<br>";
    $query2 = "select * from `attends`";
                        $result2 = mysqli_query($conn,$query2);
                        while( $r2 = mysqli_fetch_array($result2) )
                            {
                                echo "<table>";
                                    echo "<tr>";
                                       echo "<td><input type=\"radio\" name=\"t2\" value=\"$r2['Reg_no'] $r2['class_attend']";
                                    echo "</tr>";
                                     
                            }
        ?>
                        