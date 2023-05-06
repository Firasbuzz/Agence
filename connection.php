<?php 
		$mysqli = mysqli_connect('localhost', 'root', '', 'agencevoiture');
		if($mysqli === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
?>