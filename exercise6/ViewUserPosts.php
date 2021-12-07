<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "h932a540", "agiep7oh", "h932a540"); 
if ($mysqli->connect_errno) { 
	printf("Connect failed: %s\n", $mysqli->connect_error);
} 
$userID = $_REQUEST["users"];

$query = "SELECT * FROM Posts WHERE author_id='$userID'";

echo "<table border='solid'>";
echo "<tr>  <th>Posts From " . $userID . "</th>";

if($result = $mysqli->query($query))
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>" . $row["content"] . "</td></tr>";
	}
	echo "</table>";
}	

?>
