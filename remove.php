<html>
	<head>
		<title>Phonebook</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id ="wrap">
			<div id="search">
				<img src="img/delete.png" height="200px">
				<a href="index.php">
				<img src="img/search1.png" height="50px" title="Pretraži"></a>
				<a href="insert.php">
				<img src="img/add.jpg" height="50px" title="Dodaj novi kontakt"></a>
				
				<?php
					require 'inc/connect.php';
					$query = "SELECT * FROM contacts";
					$result = mysqli_query($conn, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_assoc($result))
					{
						?>
						<div id="result">
							<a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"></a>
							<p><b>Ime:</b><?php echo $row['fname'] . " " . $row['Iname']; ?></p>
							<p><b>Tel:</b><?php echo $row['tel']; ?></p>
						</div>
						<?php
					}						
					}
					else
					{
						?><br/><?php 
						echo "Nema kontakta.";
					}
				?>
			</div>
		</div>
	</body>
</html>