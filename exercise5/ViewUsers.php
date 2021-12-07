<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "h932a540", "agiep7oh", "h932a540");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
}

echo "<table border='solid'>";
echo "<tr>  <th>Users</th>";

$query = "SELECT * FROM Users";

if($result = $mysqli->query($query))
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>" . $row["user_id"] . "</td></tr>";
	}
	echo "</table>";
}

 ?>
