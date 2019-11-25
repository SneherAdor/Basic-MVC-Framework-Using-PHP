<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MVC framework</title>
</head>
<body>
	<?php foreach ($posts as $post) {
		echo "<h3>{$post['title']}</h3>";
		echo "<p>{$post['content']}</p>";
	} ?>
</body>
</html>