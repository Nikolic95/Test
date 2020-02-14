<?php 
	require 'connect.php'; 
	
	if(isset($_GET['select']))
	{
		if(!empty($_GET['select']))
		{
			$select = trim($_GET['select']);
			$select = mysqli_real_escape_string($conn, $select);
			$query = "SELECT * FROM list WHERE MARK LIKE '%{$select}%'";
			$result = mysqli_query($conn, $query);
			
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					?>
						<div id="result">
							<a href="inc/deleteList.php?id=<?php echo $row['id'] ?>"></a>
							<p><b>Naziv valute:  </b><?php echo $row['MARK']; ?><br></p>
							<p><b>Kurs:  </b><?php echo $row['VALUTA']; ?> RSD.<br><b>Važi ja 1 <?php echo $row['MARK']; ?>.</b></p>
						</div>
					<?php
				}
				echo "Broj rezultata: " . mysqli_num_rows($result);
			}
			else
			{
				echo 'Nema rezultata.';
			}
		}
		else
		{
			echo 'Unosi su prazni.';
		}
	}
?>