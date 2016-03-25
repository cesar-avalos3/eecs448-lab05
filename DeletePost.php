<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cavalosb", "swkotor22", "cavalosb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
	$checkboxarray      =  $_POST["checkboxes"];

	echo "The following posts have been erased <br>";

	foreach ($checkboxarray as $check)
	{
		if(isset($check))
		{
			if( $mysqli->query("DELETE FROM Posts WHERE post_id='$check'") )
			{
				echo "Post number: '$check' <br>";
			}
		}
	}

/* close connection */
$mysqli->close();
?>