<html>
	<head>
		<title>KURSNA LISTA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id ="wrap">
			<div id="search">
				<img src="img/add.svg" height="300px">
				<a href="index.php"><img src="img/search.png" height="50px"></a>
				<a href="delete.php"><img src="img/delete.png" height="50px"></a>
				<form action="#" method="POST">
					<label>Naziv valute:<br/>
					<input type="text" name="MARK">
					</label><br/>
					<label>Kurs:<br/>
					<input type="text" name="VALUTA">
					</label><br/>
					<input type="submit" name="insert" value="Sačuvaj"><br/>
				</form>
			</div>
			<div id="message"> 
				<?php
					if(ISSET($_POST['insert']))
					{
							if(ISSET($_POST['MARK']) && ISSET($_POST['VALUTA']))
							{
								if(!empty($_POST['MARK']) && !empty($_POST['VALUTA']))
								{
									$mark = trim($_POST['MARK']);
									$valuta = trim($_POST['VALUTA']);
									require 'inc/connect.php';
									$mark = mysqli_real_escape_string($conn, $mark);
									$valuta = mysqli_real_escape_string($conn, $valuta);
									
									$query = "INSERT INTO list (MARK, VALUTA) VALUES ('{$mark}','{$valuta}')";
									if(mysqli_query($conn, $query) === TRUE)
									{
										echo "Novi zapis je uspešno stvoren.";
									}
									else
									{
											echo "Greška";
									}
									
								}
								else
								{
									echo "Sva polja moraju biti popunjena.";
								}
							}
							else
							{
								echo "Svi parametri moraju biti poslati:";
							}
					}
				?>
			</div> 
		</div>
	</body>
</html>