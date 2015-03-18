<?php
	$connection = new mysqli('localhost', 'root', '', 'auction');
	$query = 'select * from item';
	$result = $connection->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);


?>