<!DOCTYPE HTML>
<html>
<head>
	<title>Auction</title>
	<link href="css/layout.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
	<div class="header">
		<h1>Auction</h1>
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.php">Items</a></li>
			<li>Category</li>
			<li>Communication</li>
			<li>History</li>
			<li>Review</li>
			<li>User</li>
		</ul>
	</div>
	<table>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Added</th>
			<th>Start time</th>
			<th>Current offer</th>
			<th>User id</th>
			<th>Category id</th>
		</tr>
		<?php
		foreach($data as $dat):
		?>
			<tr>
				<td>Technisch Lego</td>
				<td>Gloedjenieuwe lego zo in originele doos.</td>
				<td>2012-01-10</td>
				<td>10:00:00</td>
				<td>&euro;10.55</td>
				<td>5</td>
				<td>8</td>
			</tr>
		<?php 
		endforeach;
		?>
	</table>
	<div class="footer">&copy; by Da Vinci College</div>
</div>
</body>
</html>