<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CSS for Backend Devs</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<!--<link rel="stylesheet" href="Public/CSS/normalize.css">-->
	<link rel="stylesheet" href="Public/CSS/app.css?v=1">
</head>

<body>

	<header>
		<div class="container">
			<div class="header-top">
				<h1>XCasts</h1>

				<a href="#">Sign In</a>
			</div>

			<nav>
				<a href="#">Catalog</a>
				<a href="#">Series</a>
				<a href="#">Podcast</a>
				<a href="#">Discussions</a>
			</nav>
		</div>	
			
	</header>

	<?php
	$employees = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts?fbclid=IwAR1Zf5jWOB4WAAVjG3TDtx-Qi3INj2EzCyWzOxyT9KjVd779s-0_ZXn6q4g"), true);


for($i = 0; $i < 10; $i++){
   
    echo "Id of user - ".$employees[$i]['userId']."<br> Id - ".$employees[$i]['id']."<br>"
    .$employees[$i]['title']."<br>".$employees[$i]['body'];
  

} ?>


</body>
</html>
