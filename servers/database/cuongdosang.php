<?php
include "../connection.php";
$query = "SELECT * from display";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
	echo $row["Light1"] . "Lux";
};
