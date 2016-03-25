<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cavalosb", "swkotor22", "cavalosb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

	$userQuery = "SELECT user_id FROM Users";

	$results = $mysqli->query($userQuery);

	echo "Super pro user list </br> <table>";

	while($row = $results->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" .$row["user_id"]. "</td>";
		echo "<tr>";
	}
	echo "</table>";

	$results->free();
/* close connection */
$mysqli->close();
?>