<?php
$servername="localhost";
$username="root";
$pass="11111111";
$db="hotels";
$Name=$_POST["Name"];
$email=$_POST["email"];
$Password=$_POST["Password"];
$Date=$_POST["Date1"];
$conn=new mysqli($servername,$username,$pass,$db);

if($conn->connecte_error){
	"no connecte".connecte_error;
	
}else{
	"connected";
	$sql="INSERT INTO userinfo (Name,email,Password,Date1) VALUES('$Name','$email','$Password','$Date')";

if($conn->multi_query($sql)==TRUE){
	$data=$data= "welcome in our family";
	$conn->close;
}else{
$data="error";
}

}


?>
<html>
<head>
<title>
Hotels
</title>
<link rel="stylesheet" href="hcss.css">
<style>
h1 {
font-variant: small-caps;
	color:#262626;
	text-align:center;
	font-size:140px;
	padding-top:0;
	padding-left:0.3em;
}

</style>
</head>
<body>

<ul>
<li><a href="hotel.php">Home</a></li>
<li><a href="all.php">Hotels</a></li>
<li><a href="sh.php">Cheap hotels</a></li>
<li><a href="ex.php">Expensive hotels</a></li>
</ul>


<h1><?echo $data; ?></h1>



</body>
</html>