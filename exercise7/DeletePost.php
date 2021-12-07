<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "h932a540", "agiep7oh", "h932a540"); 

if ($mysqli->connect_errno) { 
	printf("Connect failed: %s\n", $mysqli->connect_error);
} 


foreach($_POST['postid'] as $value)
{
	$query = "DELETE FROM Posts WHERE post_id=$value";
	$mysqli->query($query);
	printf("Deleted: %s\n", $value);
}


$mysqli->close();
?>
