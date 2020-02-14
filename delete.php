<html>
	<head>
		<title>KURSNA LISTA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body> 
		<div id ="wrap">
			<div id="search">
				<img src="img/delete.png" height="250px">
				<a href="index.php"><img src="img/search.png" height="50px"></a>
				<a href="insert.php"><img src="img/add.svg" height="50px"></a>
				
				<?php
					require 'inc/connect.php';
					$query = "SELECT * FROM list";
					$result = mysqli_query($conn, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_assoc($result))
					{
						?>
						<div id="result">
							<a href="inc/deleteList.php?id=<?php echo $row['id'] ?>"><img src="img/delete.png" height="50px"></a>
							<p><b>Naziv valute:  </b><?php echo $row['MARK']; ?><br></p>
							<p><b>Kurs:  </b><?php echo $row['VALUTA']; ?> RSD.<br><b>Važi ja 1 <?php echo $row['MARK']; ?>.</b></p>
						</div>
						<?php
					}						
					}
					else
					{
						?><br/><?php 
						echo "Kursna lista je prazna";
					}
				?>
			</div> 
		</div>
	</body>
</html>