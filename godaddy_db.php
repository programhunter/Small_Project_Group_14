<?php

/*		$con = mysqli_connect("localhost","root","okay","contacts");

		if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			*/
			
		$con = mysqli_connect("localhost","hunter-pierce","GoddamnIt1!","contactsforlein");
		
		if(mysqli_connect_errno())
		{
			echo"failed to connect to db: " . mysqli_connect_error();
		}
?>