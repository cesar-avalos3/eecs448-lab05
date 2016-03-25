<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cavalosb", "swkotor22", "cavalosb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
	$user      =  $_POST["select"];
	echo "<h1 class='pageTitle'> The post history of ".$user;
	$userQuery = "SELECT content, post_id FROM Posts WHERE author_id = '$user'";

	$results = $mysqli->query($userQuery);


	echo '<link rel="stylesheet" type="text/css" href="ViewUsersPosts.css">';
	echo '<div id="content">';
	echo "Super pro user list </br> <table>";

	echo "<tr>";
	echo "<td id='postid'> Post id </td>";
	echo "<td> Post </td>";
	echo "</tr>";
	
	while($row = $results->fetch_assoc())
	{

		echo "<tr>";
		echo "<td id='postid' width=50>" .$row["post_id"]. "</td>";
		echo "<td id='content' width=450>" .$row["content"]. "</td>";
		echo "</tr>";
	}

	echo "</table>";
	echo '</div>';
	$results->free();
/* close connection */
$mysqli->close();
?>