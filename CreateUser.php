<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cavalosb", "swkotor22", "cavalosb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

	$query = "SELECT user_id FROM Users";

	$username = $_POST["username"];

	$results = $mysqli->query("SELECT user_id FROM Users");

	if($mysqli->query("INSERT INTO Users(user_id) VALUES('".$username."')") )
	{
		echo "Your username has been successfully registered";
	}
	else
	{
		echo "That username is unfortunately taken";
	}
	
    /* free result set */
    $results->free();
/* close connection */
$mysqli->close();
?>