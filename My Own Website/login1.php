<?php
	$first=$_POST['first'];
	$last=$_POST['last'];
	$pass=$_POST['pass'];
	$addr=$_POST['addr'];
	$gender=$_POST['gender'];
	$high=$_POST['high'];

	$conn= new mysqli('localhost','root','','samplelogin');
	if($conn->connect_error){
		die('Connection Failed: ' .$conn->connect_error);
		}
	else
	{
		$stmt=$conn->prepare("insert into registration(first,last,pass,addr,gender,high) values(?,?,?,?,?,?)");	
		$stmt->bind_param("ssssss",$first,$last,$pass,$addr,$gender,$high);
		$stmt->execute();
		echo "Registration successfull";
		$stmt->close();
		$conn->close();	
	}
?>