<?php
	$conn = new mysqli("localhost","root","","sungsue");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>