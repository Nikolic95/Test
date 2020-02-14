<html>
	<head>
		<title>KURSNA LISTA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h1>Kursna lista</h1>
		<div id ="wrap">
			<div id="search">
				<img src="img/search.png" height="200px">
				<form action="#" method="GET">
					<input type="text" name="select" placeholder="Naziv valute">
					<input type="submit" value="Traži"><br/>
					<a href="insert.php"><img src="img/add.svg" height="50px"></a>
					<a href="delete.php"><img src="img/delete.png" height="50px"></a>
				</form>
			</div>
			<?php
				include 'inc/getResults.php';
			?>
		</div>
	</body>
</html>