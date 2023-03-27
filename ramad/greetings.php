<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ramadan Greetings</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<audio src="https://srv1.onlymp3.to/download?file=fe7def15aa16d964d3f525ad540674b9251003" autoplay> </audio>
	<img class="img" src="https://i.ytimg.com/vi/IeE9WDNoUYA/maxresdefault.jpg" alt="">

<?php
		if (isset($_POST['name'])) {
			$name = htmlspecialchars($_POST['name']);
			echo '<div class="container">';
			echo '<h1>Ramadan Mubarak, '.$name.'!</h1>';
			echo '<a href="index.html">Go back</a>';
			echo '</div>';
			
		} else {
			header('Location: index.html');
		}
	?>
</body>
</html>