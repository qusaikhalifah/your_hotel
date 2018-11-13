

<?php

$servername ="localhost";
$username="root";
$pass="";
$db_name="store";

$email=$_POST["email"];
$Password=$_POST["Password"];



$conn= new mysqli($servername,$username,$pass,$db_name);

if($conn -> connect_error){
	
	die(" Not Connected  :( ".$conn -> connect_error);
}

else{
	
	 "All Good < Connected :) ";
	$sql2="SELECT * FROM userinfo WHERE email='$email' AND Password='$Password' ";
	
$rsult=$conn->query($sql2);
	$row =$rsult->fetch_assoc();
	if($row["email"]==$email && $row["Password"]==$Password){
		 header('location:home.php');exit();
}else{
				header('location:index.php');


			
		}
		
}
	
