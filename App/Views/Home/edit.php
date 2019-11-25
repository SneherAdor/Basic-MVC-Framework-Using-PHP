<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MVC framework</title>
</head>
<body>
	<h1>PHP MVC framework From EDIT file <?php echo $name ?></h1>
	<?php 
		foreach ($names as $name) {
			echo "<li>".$name."</li>";
		}

	 ?>
</body>
</html>