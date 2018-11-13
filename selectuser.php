<?php
$servername="localhost";
$username="root";
$pass="";
$db="store";
$email=$_POST["email"];
$password=$_POST{"password"};
$conn=new mysqli($servername,$username,$pass,$db);

if($conn->connecte_error){
	"no connecte".connecte_error;
	
}else{
	"connected";
	$table="<table>
	<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Pass</th>
<th>Date</th>	
	</tr>";
	$sql="SELECT * FROM userinfo WHERE email='$email' AND password='$password'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
			     $table=$table."
<tr>
	<td>".$row["Id"]."</td>
	<td>".$row["Name"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["Password"]."</td>
	<td>".$row["Date1"]."</td>


	</tr>
	
	";}



}else{
	"error";
}
$conn->close;}




?>

<html>
<head>
<title>
Hotels
</title>
<link rel="stylesheet" href="hcss.css">
<style>

table{
height:30%;
margin-top:4em;
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
<br><br><br><br><br><br><br>
<?echo $table;?>

</body>
</html>