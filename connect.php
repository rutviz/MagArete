<?php

	$con = mysqli_connect("localhost","root","",like);
	if(mysqli_connect_errno())
	{
		echo "Error occure while connecting with database".mysqli_connect_errno();	
	}

session_start();
?>