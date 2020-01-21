<!-------------------connection page start----------->
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="health_care";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
?>
	
<!-------------------connection page ended----------->