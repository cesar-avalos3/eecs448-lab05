<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cavalosb", "swkotor22", "cavalosb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

	$username = $_POST["username"];
	$post     = $_POST["post"];

	$userQuery = "SELECT user_id FROM Users WHERE user_id = '$username'";

	$results = $mysqli->query($userQuery);

	if($results->num_rows > 0)
	{
		$mysqli->query("INSERT INTO Posts (author_id, content) VALUES('$username', '$post')");
		echo "You have succesfully posted a message";
	}
	else
	{
		echo "Well this is embarrassing, that didn't work, your username doens";
	}

	$results->free();
/* close connection */
$mysqli->close();
?>