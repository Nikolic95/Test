<?php
	if(ISSET($_GET['id']))
	{
		$id = $_GET['id'];
		require 'connect.php';
		$query = "DELETE FROM list WHERE id = {$id}";
		mysqli_query($conn, $query);
		header("Location: ../delete.php");
		
	}